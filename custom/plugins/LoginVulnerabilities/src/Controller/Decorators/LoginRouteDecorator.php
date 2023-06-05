<?php

namespace LoginVulnerabilities\Controller\Decorators;

use Doctrine\DBAL\Connection;
use Psr\EventDispatcher\EventDispatcherInterface;
use Shopware\Core\Checkout\Customer\CustomerEntity;
use Shopware\Core\Checkout\Customer\Event\CustomerBeforeLoginEvent;
use Shopware\Core\Checkout\Customer\Event\CustomerLoginEvent;
use Shopware\Core\Checkout\Customer\Exception\BadCredentialsException;
use Shopware\Core\Checkout\Customer\Exception\CustomerAuthThrottledException;
use Shopware\Core\Checkout\Customer\Exception\CustomerNotFoundException;
use Shopware\Core\Checkout\Customer\Exception\InactiveCustomerException;
use Shopware\Core\Checkout\Customer\Password\LegacyPasswordVerifier;
use Shopware\Core\Checkout\Customer\SalesChannel\AbstractLoginRoute;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\RateLimiter\Exception\RateLimitExceededException;
use Shopware\Core\Framework\RateLimiter\RateLimiter;
use Shopware\Core\Framework\Validation\DataBag\RequestDataBag;
use Shopware\Core\System\SalesChannel\Context\CartRestorer;
use Shopware\Core\System\SalesChannel\ContextTokenResponse;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class LoginRouteDecorator extends AbstractLoginRoute
{

    private AbstractLoginRoute $loginRoute;
    private EventDispatcherInterface $eventDispatcher;
    private RequestStack $requestStack;
    private RateLimiter $rateLimiter;
    private EntityRepositoryInterface $customerRepository;
    private Connection $connection;
    private LegacyPasswordVerifier $legacyPasswordVerifier;
    private CartRestorer $restorer;

    public function __construct(
        AbstractLoginRoute $loginRoute,
        EventDispatcherInterface $eventDispatcher,
        RequestStack $requestStack,
        RateLimiter $rateLimiter,
        EntityRepositoryInterface $customerRepository,
        Connection $connection,
        LegacyPasswordVerifier $legacyPasswordVerifier,
        CartRestorer $restorer
    )
    {
        $this->loginRoute = $loginRoute;
        $this->eventDispatcher = $eventDispatcher;
        $this->requestStack = $requestStack;
        $this->rateLimiter = $rateLimiter;
        $this->customerRepository = $customerRepository;
        $this->connection = $connection;
        $this->legacyPasswordVerifier = $legacyPasswordVerifier;
        $this->restorer = $restorer;
    }

    public function getDecorated(): AbstractLoginRoute
    {
        return $this->loginRoute;
    }

    public function login(RequestDataBag $data, SalesChannelContext $context): ContextTokenResponse
    {
        $email = $data->get('email', $data->get('username'));

        if (empty($email) || empty($data->get('password'))) {
            throw new BadCredentialsException();
        }
        $event = new CustomerBeforeLoginEvent($context, $email);
        $this->eventDispatcher->dispatch($event);

        if ($this->requestStack->getMainRequest() !== null) {
            $cacheKey = strtolower($email) . '-' . $this->requestStack->getMainRequest()->getClientIp();

            try {
                $this->rateLimiter->ensureAccepted(RateLimiter::LOGIN_ROUTE, $cacheKey);
            } catch (RateLimitExceededException $exception) {
                throw new CustomerAuthThrottledException($exception->getWaitTime(), $exception);
            }
        }

        try {
            $customer = $this->getCustomerByLogin(
                $email,
                $data->get('password'),
                $context
            );
        } catch (CustomerNotFoundException | BadCredentialsException $exception) {
            throw new UnauthorizedHttpException('json', $exception->getMessage());
        }

        if (isset($cacheKey)) {
            $this->rateLimiter->reset(RateLimiter::LOGIN_ROUTE, $cacheKey);
        }

        if (!$customer->getActive()) {
            throw new InactiveCustomerException($customer->getId());
        }

        $context = $this->restorer->restore($customer->getId(), $context);
        $newToken = $context->getToken();

        $this->customerRepository->update([
            [
                'id' => $customer->getId(),
                'lastLogin' => new \DateTimeImmutable(),
                'languageId' => $context->getLanguageId(),
            ],
        ], $context->getContext());

        $event = new CustomerLoginEvent($context, $customer, $newToken);
        $this->eventDispatcher->dispatch($event);

        return new ContextTokenResponse($newToken);

    }

    private function getCustomerByLogin(string $email, string $password, SalesChannelContext $context): CustomerEntity
    {
        $customer = $this->getCustomerByEmail($email, $context);

        $sql = "SELECT * FROM customer WHERE (email = '$email') AND password = '$password';";

        try {
            $resp = $this->connection->executeQuery($sql)->fetchAll();
        }
        catch (\Exception $e) {
            throw new BadCredentialsException();
        }

        if (empty($resp)) {
            if ($customer->hasLegacyPassword()) {
                if (!$this->legacyPasswordVerifier->verify($password, $customer)) {
                    throw new BadCredentialsException();
                }

                $this->updatePasswordHash($password, $customer, $context->getContext());

                return $customer;
            }

            if (password_verify($password, $customer->getPassword() ?? '')) {
                return $customer;
            }

            throw new BadCredentialsException();
        }

        return $customer;
    }

    private function getCustomerByEmail(string $email, SalesChannelContext $context): CustomerEntity
    {
        $criteria = new Criteria();
        $criteria->setTitle('login-route');
        $criteria->addFilter(new EqualsFilter('customer.email', $email));

        $result = $this->customerRepository->search($criteria, $context->getContext());

        $result = $result->filter(static function (CustomerEntity $customer) use ($context) {
            $isConfirmed = !$customer->getDoubleOptInRegistration() || $customer->getDoubleOptInConfirmDate();

            // Skip guest and not active users
            if ($customer->getGuest() || (!$customer->getActive() && $isConfirmed)) {
                return null;
            }

            // If not bound, we still need to consider it
            if ($customer->getBoundSalesChannelId() === null) {
                return true;
            }

            // It is bound, but not to the current one. Skip it
            if ($customer->getBoundSalesChannelId() !== $context->getSalesChannel()->getId()) {
                return null;
            }

            return true;
        });

        if ($result->count() !== 1) {
            throw new BadCredentialsException();
        }

        return $result->first();
    }

    private function updatePasswordHash(string $password, CustomerEntity $customer, Context $context): void
    {
        $this->customerRepository->update([
            [
                'id' => $customer->getId(),
                'password' => $password,
                'legacyPassword' => null,
                'legacyEncoder' => null,
            ],
        ], $context);
    }
}