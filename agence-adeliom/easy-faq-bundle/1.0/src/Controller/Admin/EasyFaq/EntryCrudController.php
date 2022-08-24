<?php

declare(strict_types=1);

namespace App\Controller\Admin\EasyFaq;

use Adeliom\EasyFaqBundle\Controller\EntryCrudController as BaseEntryCrudController;
use App\Entity\EasyFaq\Entry;

class EntryCrudController extends BaseEntryCrudController
{
    public static function getEntityFqcn(): string
    {
        return Entry::class;
    }
}
