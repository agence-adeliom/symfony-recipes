<?php

declare(strict_types=1);

namespace App\Repository\EasyMenu;

use Adeliom\EasyMenuBundle\Repository\MenuRepository as BaseMenuRepository;
use App\Entity\EasyMenu\Menu;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Menu|null   find($id, $lockMode = null, $lockVersion = null)
 * @method Menu|null   findOneBy(array $criteria, array $orderBy = null)
 * @method array<Menu> findAll()
 * @method array<Menu> findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MenuRepository extends BaseMenuRepository
{
    public function __construct(EntityManagerInterface $registry)
    {
        parent::__construct($registry, Menu::class);
    }
}
