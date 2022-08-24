<?php

declare(strict_types=1);

namespace App\Repository\EasyBlock;

use Adeliom\EasyBlockBundle\Repository\BlockRepository as BaseBlockRepository;
use App\Entity\EasyBlock\Block;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Block|null find($id, $lockMode = null, $lockVersion = null)
 * @method Block|null findOneBy(array $criteria, array $orderBy = null)
 * @method array<Block> findAll()
 * @method array<Block> findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlockRepository extends BaseBlockRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Block::class);
    }
}
