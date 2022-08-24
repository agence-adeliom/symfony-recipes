<?php

declare(strict_types=1);

namespace App\Controller\Admin\EasyShop\Products;

use Adeliom\EasyShopBundle\Admin\Products\TrackedProductCrudController as BaseTrackedProductCrudController;
use App\Entity\EasyShop\Product\ProductVariant;

class TrackedProductCrudController extends BaseTrackedProductCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProductVariant::class;
    }
}
