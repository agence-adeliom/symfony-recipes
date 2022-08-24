<?php

declare(strict_types=1);

namespace App\Controller\Admin\EasyShop\Settings;

use Adeliom\EasyShopBundle\Admin\Settings\PaymentMethodCrudController as BasePaymentMethodCrudController;
use App\Entity\EasyShop\Payment\PaymentMethod;

class PaymentMethodCrudController extends BasePaymentMethodCrudController
{
    public static function getEntityFqcn(): string
    {
        return PaymentMethod::class;
    }
}
