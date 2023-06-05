<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\Checkout\Payment\Method;

abstract class AbstractPaymentMethodHandler
{
    public const PAYPAL_PAYMENT_ORDER_ID_INPUT_NAME = 'paypalOrderId';
}
