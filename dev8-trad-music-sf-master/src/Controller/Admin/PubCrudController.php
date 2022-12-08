<?php

namespace App\Controller\Admin;

use App\Entity\Pub;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PubCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pub::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            ImageField::new('image')->SetUploadDir('/public/uploads/')->setBasePath('/uploads/'),
            TextField::new('adress'),
            TextField::new('zipcode'),
            TextField::new('city'),



        ];
    }

}
