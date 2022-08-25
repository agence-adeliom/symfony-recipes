<?php

declare(strict_types=1);

namespace App\Repository\EasyPage;

use Adeliom\EasyPageBundle\Repository\PageRepository as BasePageRepository;
use App\Entity\EasyPage\Page;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Page|null   find($id, $lockMode = null, $lockVersion = null)
 * @method Page|null   findOneBy(array $criteria, array $orderBy = null)
 * @method array<Page> findAll()
 * @method array<Page> findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageRepository extends BasePageRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Page::class);
    }
}
