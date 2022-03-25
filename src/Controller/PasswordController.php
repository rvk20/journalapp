<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class PasswordController extends AbstractController
{

    private $user;
    private $entityManager;

    public function __construct(ManagerRegistry $doctrine){
        $this->user = $doctrine->getRepository(User::class);
        $this->entityManager = $doctrine->getManager();
    }

    /**
     * @Route("/chpass", name="app_password")
     */
    public function index(Request $request, UserPasswordHasherInterface $passEncoder): Response
    {

        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createFormBuilder();

        
        $form
        ->add('password', RepeatedType::class, [
            'type' => PasswordType::class,
            'required' => true,
            'first_name' => 'pass',
            'first_options' => ['label' => 'Nowe hasło'],
            'second_name' => 'confirm',
            'second_options' => ['label' => 'Powtórz hasło']
        ]);

        $form
        ->add('change', SubmitType::class, [
            'label' => 'Zmień',
            'attr' => [
                'class' => 'btn btn-info btn-lg btn-block'
            ],
            
        ]);

        $f = $form->getForm();
        $f->handleRequest($request);
        if($f->isSubmitted()) {
            $data = $f->getData();
            $user = $this->user->find($this->getUser()->getId());
            $user->setPassword($passEncoder->hashPassword($user, $data['password']));
            $this->entityManager->persist($user);
            $this->entityManager->flush();
        }

        return $this->render('password/index.html.twig', [
            'form'=> $f->createView()
        ]);
    }
}
