<?php

namespace App\Controller\Admin;

use App\Entity\CGV;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CGVCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CGV::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
