<?php

namespace App\Controller\Admin;

use App\Entity\Subject;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Doctrine\ORM\EntityManagerInterface;


class SubjectCrudController extends AbstractCrudController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    

    public static function getEntityFqcn(): string
    {
        return Subject::class;
    }

    
    public function configureFields(string $pageName): iterable
    {

        $teachers = $this->em->getRepository(User::class)->findBy(['rang' => 'teacher']);
        $array = array($teachers);

        return [
            TextField::new('name', 'Nazwa'),
            AssociationField::new('StudentGroup', 'Klasa'),
            AssociationField::new('User', 'Użytkownik')->setFormTypeOptions([
                "choices" => $array
            ])
        ];
    }

    
}
