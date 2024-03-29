<?php

declare(strict_types=1);

namespace App\Repository\EasyMenu;

use Adeliom\EasyMenuBundle\Repository\MenuRepository as BaseMenuRepository;
use App\Entity\EasyMenu\Menu;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Menu|null   find($id, $lockMode = null, $lockVersion = null)
 * @method Menu|null   findOneBy(array $criteria, array $orderBy = null)
 * @method array<Menu> findAll()
 * @method array<Menu> findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MenuRepository extends BaseMenuRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Menu::class);
    }
}
