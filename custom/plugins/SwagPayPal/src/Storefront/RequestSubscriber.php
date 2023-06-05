<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\Storefront;

use Psr\Log\LoggerInterface;
use Shopware\Storefront\Event\RouteRequest\HandlePaymentMethodRouteRequestEvent;
use Shopware\Storefront\Event\RouteRequest\PaymentMethodRouteRequestEvent;
use Swag\PayPal\Checkout\Payment\Handler\PlusPuiHandler;
use Swag\PayPal\Checkout\Payment\Method\AbstractPaymentMethodHandler;
use Swag\PayPal\Checkout\Payment\Method\PUIHandler;
use Swag\PayPal\Checkout\Payment\PayPalPaymentHandler;
use Swag\PayPal\Checkout\PUI\Service\PUICustomerDataService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * @internal
 */
class RequestSubscriber implements EventSubscriberInterface
{
    public const PAYMENT_PARAMETERS = [
        AbstractPaymentMethodHandler::PAYPAL_PAYMENT_ORDER_ID_INPUT_NAME,
        PUIHandler::PUI_FRAUD_NET_SESSION_ID,
        PUICustomerDataService::PUI_CUSTOMER_DATA_BIRTHDAY,
        PUICustomerDataService::PUI_CUSTOMER_DATA_PHONE_NUMBER,
        PlusPuiHandler::PAYPAL_PAYMENT_ID_INPUT_NAME,
        PlusPuiHandler::PAYPAL_PAYMENT_TOKEN_INPUT_NAME,
        PayPalPaymentHandler::PAYPAL_PLUS_CHECKOUT_ID,
    ];

    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            HandlePaymentMethodRouteRequestEvent::class => 'addHandlePaymentParameters',
            PaymentMethodRouteRequestEvent::class => 'addAfterOrderId',
        ];
    }

    public function addHandlePaymentParameters(HandlePaymentMethodRouteRequestEvent $event): void
    {
        $this->logger->debug('Adding request parameter');
        $storefrontRequest = $event->getStorefrontRequest();
        $storeApiRequest = $event->getStoreApiRequest();

        $originalRoute = $storefrontRequest->attributes->get('_route');
        if ($originalRoute !== 'frontend.account.edit-order.update-order') {
            return;
        }

        foreach (self::PAYMENT_PARAMETERS as $paymentParameter) {
            $storeApiRequest->request->set($paymentParameter, $storefrontRequest->request->get($paymentParameter));
        }

        $this->logger->debug('Added request parameter');
    }

    public function addAfterOrderId(PaymentMethodRouteRequestEvent $event): void
    {
        $storefrontRequest = $event->getStorefrontRequest();
        $storeApiRequest = $event->getStoreApiRequest();

        $originalRoute = $storefrontRequest->attributes->get('_route');
        if ($originalRoute !== 'frontend.account.edit-order.page') {
            return;
        }

        if (!$storefrontRequest->attributes->has('orderId')) {
            return;
        }

        $storeApiRequest->attributes->set('orderId', $storefrontRequest->attributes->getAlnum('orderId'));
    }
}
