<?php

namespace App\Entity\Page;

use Adeliom\EasyPageBundle\Entity\BasePageEntity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Page\PageRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Page extends BasePageEntity
{

}
