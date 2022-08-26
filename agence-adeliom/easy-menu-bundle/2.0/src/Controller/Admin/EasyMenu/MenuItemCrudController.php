<?php

declare(strict_types=1);

namespace App\Controller\Admin\EasyMenu;

use Adeliom\EasyMenuBundle\Controller\MenuItemCrudController as BaseMenuItemCrudController;
use App\Entity\EasyMenu\MenuItem;

class MenuItemCrudController extends BaseMenuItemCrudController
{
    public static function getEntityFqcn(): string
    {
        return MenuItem::class;
    }
}
