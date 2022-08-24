<?php

declare(strict_types=1);

namespace App\Entity\EasyRedirect;

use Adeliom\EasyRedirectBundle\Entity\Redirect as BaseRedirect;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 *
 * @ORM\Table(name="easy_redirect__redirect")
 */
class Redirect extends BaseRedirect
{
}
