<?php

declare(strict_types=1);

namespace App\Entity\EasyBlock;

use Adeliom\EasyBlockBundle\Entity\Block as BaseBlock;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EasyBlock\BlockRepository")
 *
 * @ORM\Table(name="easy_block__block")
 *
 * @ORM\HasLifecycleCallbacks()
 */
class Block extends BaseBlock
{
}
