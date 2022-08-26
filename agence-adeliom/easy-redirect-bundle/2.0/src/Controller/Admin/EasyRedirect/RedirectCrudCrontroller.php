<?php

declare(strict_types=1);

namespace App\Controller\Admin\EasyRedirect;

use Adeliom\EasyRedirectBundle\Admin\RedirectCrudCrontroller as BaseRedirectCrudCrontroller;
use App\Entity\EasyRedirect\Redirect;

class RedirectCrudCrontroller extends BaseRedirectCrudCrontroller
{
    public static function getEntityFqcn(): string
    {
        return Redirect::class;
    }
}
