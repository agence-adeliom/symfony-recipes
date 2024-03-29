<?php

declare(strict_types=1);

namespace App\Repository\EasyBlog;

use Adeliom\EasyBlogBundle\Repository\PostRepository as BasePostRepository;
use App\Entity\EasyBlog\Post;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Post|null   find($id, $lockMode = null, $lockVersion = null)
 * @method Post|null   findOneBy(array $criteria, array $orderBy = null)
 * @method array<Post> findAll()
 * @method array<Post> findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostRepository extends BasePostRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }
}
