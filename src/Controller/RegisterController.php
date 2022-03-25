<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\StudentGroup;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;


class RegisterController extends AbstractController
{
    private $group;

    public function __construct(ManagerRegistry $doctrine)
    {
        $repository = $doctrine->getRepository(StudentGroup::class);
        $this->group = $repository->findAll();
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, UserPasswordHasherInterface $passEncoder, ManagerRegistry $doctrine)
    {

        if ($this->getUser()) {
            return $this->redirectToRoute('index');
        }
        $group = $this->group;
        $g = new StudentGroup();

        
                        

        $form = $this->createFormBuilder()
            ->add('ranga', ChoiceType::class, [
                'choices'  => [
                    'Wybierz ..' => false,
                    'Nauczyciel' => 'teacher',
                    'Uczeń' => 'student',
                ],
            ])
            ->add('email')
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'required' => true,
                'first_name' => 'pass',
                'first_options' => ['label' => 'Hasło'],
                'second_name' => 'confirm',
                'second_options' => ['label' => 'Powtórz hasło']
            ])
            ->add('Imie')
            ->add('Nazwisko')
            ->add('Adres')
            ->add('Numertelefonu')
            ->add('grupa', EntityType::class, [
            'class' => StudentGroup::class,
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.name', 'ASC');
            },
            'choice_label' => 'name',
        ])
            ->add('Zarejestruj', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-info btn-lg btn-block'
                ],
                
            ]);
            $f = $form->getForm();
            $f->handleRequest($request);
            if($f->isSubmitted()) {
                $data = $f->getData();
                $class = strval($data['grupa']);
                $repository = $doctrine->getRepository(StudentGroup::class);
                $product = $repository->findOneBy(['name' => $class]);
                $user = new User();
                $user->setEmail($data['email']);
                $user->setName($data['Imie']);
                $user->setSurname($data['Nazwisko']);
                $user->setAddress($data['Adres']);
                $user->setPhone($data['Numertelefonu']);
                $user->setRang($data['ranga']);
                $user->setStudentGroup($product);
                $user->setPassword(
                    $passEncoder->hashPassword($user, $data['password'])
                );
                
                $em = $doctrine->getManager();
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl('app_login'));
            }
          

            return $this->render('register/index.html.twig', [
                'form'=> $f->createView()
            ]);

    }
}
