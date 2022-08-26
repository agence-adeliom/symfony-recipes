<?php

declare(strict_types=1);

namespace App\Controller\Admin\EasyBlog;

use Adeliom\EasyBlogBundle\Controller\Admin\CategoryCrudController as BaseCategoryCrudController;
use App\Entity\EasyBlog\Category;

class CategoryCrudController extends BaseCategoryCrudController
{
    public static function getEntityFqcn(): string
    {
        return Category::class;
    }
}
