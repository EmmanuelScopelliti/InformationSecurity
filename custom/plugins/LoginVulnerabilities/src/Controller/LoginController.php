<?php

namespace LoginVulnerabilities\Controller;

use Doctrine\DBAL\Connection;
use LoginVulnerabilities\Controller\Decorators\LoginRouteDecorator;
use Shopware\Core\Checkout\Customer\Exception\BadCredentialsException;
use Shopware\Core\Checkout\Customer\Exception\CustomerAuthThrottledException;
use Shopware\Core\Checkout\Customer\Exception\InactiveCustomerException;
use Shopware\Core\Checkout\Customer\SalesChannel\AbstractLoginRoute;
use Shopware\Core\Checkout\Customer\SalesChannel\AbstractLogoutRoute;
use Shopware\Core\Checkout\Customer\SalesChannel\AbstractResetPasswordRoute;
use Shopware\Core\Checkout\Customer\SalesChannel\AbstractSendPasswordRecoveryMailRoute;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\Framework\Validation\DataBag\RequestDataBag;
use Shopware\Core\PlatformRequest;
use Shopware\Core\System\SalesChannel\Context\SalesChannelContextServiceInterface;
use Shopware\Core\System\SalesChannel\Context\SalesChannelContextServiceParameters;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Checkout\Cart\SalesChannel\StorefrontCartFacade;
use Shopware\Storefront\Controller\AuthController;
use Shopware\Storefront\Page\Account\Login\AccountLoginPageLoader;
use Shopware\Storefront\Page\Account\RecoverPassword\AccountRecoverPasswordPageLoader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\Routing\Annotation\Route;

//use Symfony\Component\VarDumper\VarDumper;

/**
* @RouteScope(scopes={"storefront"})
 */
class LoginController extends AuthController
{

    /** @var AccountLoginPageLoader  */
    private AccountLoginPageLoader $loginPageLoader;
    /** @var AbstractSendPasswordRecoveryMailRoute  */
    private AbstractSendPasswordRecoveryMailRoute $sendPasswordRecoveryMailRoute;
    /** @var AbstractResetPasswordRoute  */
    private AbstractResetPasswordRoute $resetPasswordRoute;
    /** @var AbstractLoginRoute  */
    private AbstractLoginRoute $loginRoute;
    /** @var AbstractLogoutRoute  */
    private AbstractLogoutRoute $logoutRoute;
    /** @var StorefrontCartFacade  */
    private StorefrontCartFacade $cartFacade;
    /** @var AccountRecoverPasswordPageLoader  */
    private AccountRecoverPasswordPageLoader $recoverPasswordPageLoader;
    /** @var SalesChannelContextServiceInterface  */
    private SalesChannelContextServiceInterface $salesChannelContext;
    private Connection $connection;

    /**
     * @internal
     */
    public function __construct(
        AccountLoginPageLoader $loginPageLoader,
        AbstractSendPasswordRecoveryMailRoute $sendPasswordRecoveryMailRoute,
        AbstractResetPasswordRoute $resetPasswordRoute,
        AbstractLoginRoute $loginRoute,
        AbstractLogoutRoute $logoutRoute,
        StorefrontCartFacade $cartFacade,
        AccountRecoverPasswordPageLoader $recoverPasswordPageLoader,
        SalesChannelContextServiceInterface $salesChannelContextService,
        Connection $connection
    ){
        $this->loginPageLoader = $loginPageLoader;
        $this->sendPasswordRecoveryMailRoute = $sendPasswordRecoveryMailRoute;
        $this->resetPasswordRoute = $resetPasswordRoute;
        $this->loginRoute = $loginRoute;
        $this->logoutRoute = $logoutRoute;
        $this->cartFacade = $cartFacade;
        $this->recoverPasswordPageLoader = $recoverPasswordPageLoader;
        $this->salesChannelContext = $salesChannelContextService;
        parent::__construct(
            $this->loginPageLoader,
            $this->sendPasswordRecoveryMailRoute,
            $this->resetPasswordRoute,
            $this->loginRoute,
            $this->logoutRoute,
            $this->cartFacade,
            $this->recoverPasswordPageLoader,
            $this->salesChannelContext);
        $this->connection = $connection;
    }

    /**
     * @Route("/account/login", name="frontend.account.login",  methods={"POST"}, defaults={"XmlHttpRequest"=true})
     */
    public function login(Request $request, RequestDataBag $data, SalesChannelContext $context): Response
    {
        $email = $data->get('email', $data->get('username'));
        $password = $data->get('password');

        $sql = "SELECT * FROM customer WHERE (email = '$email') AND password = '$password';";

        $customer = $context->getCustomer();

        if ($customer !== null && $customer->getGuest() === false) {
            return $this->createActionResponse($request);
        }

        try {
            $token = $loginRoute->login($data, $context)->getToken();
            $cartBeforeNewContext = $this->cartFacade->get($token, $context);

            $newContext = $this->salesChannelContext->get(
                new SalesChannelContextServiceParameters(
                    $context->getSalesChannelId(),
                    $token,
                    $context->getLanguageIdChain()[0],
                    $context->getCurrencyId(),
                    $context->getDomainId(),
                    $context->getContext()
                )
            );

            // Update the sales channel context for CacheResponseSubscriber
            $request->attributes->set(PlatformRequest::ATTRIBUTE_SALES_CHANNEL_CONTEXT_OBJECT, $newContext);

            if (!empty($token)) {
                $this->addCartErrors($cartBeforeNewContext);

                return $this->createActionResponse($request);
            }
        } catch (BadCredentialsException | UnauthorizedHttpException | InactiveCustomerException | CustomerAuthThrottledException $e) {
            if ($e instanceof InactiveCustomerException) {
                $errorSnippet = $e->getSnippetKey();
            }

            if ($e instanceof CustomerAuthThrottledException) {
                $waitTime = $e->getWaitTime();
            }
        }

        try {
            $resp = $this->connection->executeQuery($sql)->fetchAll();
        }
        catch (\Exception $e) {
            $resp = false;
            if ($e instanceof InactiveCustomerException) {
                $errorSnippet = $e->getSnippetKey();
            }

            if ($e instanceof CustomerAuthThrottledException) {
                $waitTime = $e->getWaitTime();
            }
        }

        if ($resp) {
            return $this->createActionResponse($request);
        }

        $data->set('password', null);

        return $this->forwardToRoute(
            'frontend.account.login.page',
            [
                'loginError' => true,
                'errorSnippet' => $errorSnippet ?? null,
                'waitTime' => $waitTime ?? null,
            ]
        );
    }
}