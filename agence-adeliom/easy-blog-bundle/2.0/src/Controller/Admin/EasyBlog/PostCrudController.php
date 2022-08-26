<?php

declare(strict_types=1);

namespace App\Controller\Admin\EasyBlog;

use Adeliom\EasyBlogBundle\Controller\Admin\PostCrudController as BasePostCrudController;
use App\Entity\EasyBlog\Post;

class PostCrudController extends BasePostCrudController
{
    public static function getEntityFqcn(): string
    {
        return Post::class;
    }
}
