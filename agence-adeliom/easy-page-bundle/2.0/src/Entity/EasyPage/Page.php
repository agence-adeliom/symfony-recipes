<?php

declare(strict_types=1);

namespace App\Entity\EasyPage;

use Adeliom\EasyPageBundle\Entity\Page as BasePage;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: \App\Repository\EasyPage\PageRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Page extends BasePage
{
}
