<?php

declare(strict_types=1);

namespace App\Controller\Admin\EasyShop\Marketing;

use Adeliom\EasyShopBundle\Admin\Marketing\ReviewCrudController as BaseReviewCrudController;
use App\Entity\EasyShop\Product\ProductReview;

class ReviewCrudController extends BaseReviewCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProductReview::class;
    }
}
