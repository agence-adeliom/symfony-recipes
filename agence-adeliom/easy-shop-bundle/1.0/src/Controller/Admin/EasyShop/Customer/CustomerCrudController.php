<?php

declare(strict_types=1);

namespace App\Controller\Admin\EasyShop\Customer;

use Adeliom\EasyShopBundle\Admin\Customer\CustomerCrudController as BaseCustomerCrudController;
use App\Entity\EasyShop\Customer\Customer;

class CustomerCrudController extends BaseCustomerCrudController
{
    public static function getEntityFqcn(): string
    {
        return Customer::class;
    }
}
