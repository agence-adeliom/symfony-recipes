<?php

namespace App\Entity\Page;

use Adeliom\EasyPageBundle\Entity\Page as BasePage;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Page\PageRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Page extends BasePage
{

}
