<?php

declare(strict_types=1);

namespace App\Entity\EasyFaq;

use Adeliom\EasyFaqBundle\Entity\CategoryEntity as BaseCategoryEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'easy_faq__category')]
#[ORM\Index(name: 'easy_faq_category_indexes', columns: ['created_at', 'status'])]
#[ORM\Entity(repositoryClass: \App\Repository\EasyFaq\CategoryRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Category extends BaseCategoryEntity
{
}
