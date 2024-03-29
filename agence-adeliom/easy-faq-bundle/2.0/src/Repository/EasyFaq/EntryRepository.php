<?php

declare(strict_types=1);

namespace App\Repository\EasyFaq;

use Adeliom\EasyFaqBundle\Repository\EntryRepository as BaseEntryRepository;
use App\Entity\EasyFaq\Entry;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Entry|null   find($id, $lockMode = null, $lockVersion = null)
 * @method Entry|null   findOneBy(array $criteria, array $orderBy = null)
 * @method array<Entry> findAll()
 * @method array<Entry> findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntryRepository extends BaseEntryRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Entry::class);
    }
}
