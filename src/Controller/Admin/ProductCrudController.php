<?php

namespace App\Controller\Admin;

use App\Entity\Product;

use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'), // permet d'afficher l'input nom du produit lors de la création d'un produit de easyadmin
            SlugField::new('slug')
                ->setTargetFieldName('name'), //permet de générer un slug
            MoneyField::new('price')
                ->setCurrency('EUR'),// permet de donner la monnaie courante
            MoneyField::new('transport_price')
                ->setCurrency('EUR'),// permet de donner la monnaie courante
            TextareaField::new('description'),
            ImageField::new('illustration')
                ->setBasePath('uploads/') // permet d'indiquer le dossier dans lequel easyAdmin doit chercher les images
                ->setUploadDir('public/uploads/')
                ->setUploadedFileNamePattern('[randomhash].[extension]') // permet de mettre un nom aléatoire à l'image
                ->setRequired(false),
            TextField::new('description_vertu1'),
            TextareaField::new('vertus1'),
            TextField::new('description_vertu2'),
            TextareaField::new('vertus2'),
            TextareaField::new('mots_clef'),
            AssociationField::new('category')   
        ];
    }
    
}
