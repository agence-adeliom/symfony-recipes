<?php

declare(strict_types=1);

namespace App\Controller\Admin\EasyMenu;

use Adeliom\EasyMenuBundle\Controller\MenuCrudController as BaseMenuCrudController;
use App\Entity\EasyMenu\Menu;

class MenuCrudController extends BaseMenuCrudController
{
    public static function getEntityFqcn(): string
    {
        return Menu::class;
    }
}
