<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\StudentGroup;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('rang', 'Ranga')
            ->setChoices(
                ['Uczeń'=>'student',
                'Nauczyciel'=>'teacher']),
            TextField::new('email', 'Email'),
            TextField::new('password', 'Hasło'),
            TextField::new('name', 'Imię'),
            TextField::new('surname', 'Nazwisko'),
            TextField::new('address', 'Adres'),
            TextField::new('phone', 'Numer telefonu'),
            AssociationField::new('StudentGroup', 'Klasa')
        ];
    }
    
}
