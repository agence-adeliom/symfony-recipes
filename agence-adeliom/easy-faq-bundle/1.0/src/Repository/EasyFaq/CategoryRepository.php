<?php

declare(strict_types=1);

namespace App\Repository\EasyFaq;

use Adeliom\EasyFaqBundle\Repository\CategoryRepository as BaseCategoryRepository;
use App\Entity\EasyFaq\Category;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Category|null find($id, $lockMode = null, $lockVersion = null)
 * @method Category|null findOneBy(array $criteria, array $orderBy = null)
 * @method array<Category> findAll()
 * @method array<Category> findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryRepository extends BaseCategoryRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }
}
