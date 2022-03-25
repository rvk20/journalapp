<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class SettingsController extends AbstractController
{
    private $user;
    private $entityManager;
    
    public function __construct(ManagerRegistry $doctrine){
        $this->user = $doctrine->getRepository(User::class);
        $this->entityManager = $doctrine->getManager();
    }

    /**
     * @Route("/settings", name="app_settings")
     */
    public function index(Request $request): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createFormBuilder();


        $form
            ->add('address', null, [
                'label' => '']);
            $form->get('address')->setData($this->getUser()->getAddress());
        $form
            ->add('phone', null, [
                'label' => '']);
            $form->get('phone')->setData($this->getUser()->getPhone());

        $form
        ->add('Edytuj', SubmitType::class, [
            'attr' => [
                'class' => 'btn btn-info btn-lg btn-block'
            ],
            
        ]);
        
        $f = $form->getForm();
        $f->handleRequest($request);


        if($f->isSubmitted()) {
            $data = $f->getData();
            $user = $this->user->find($this->getUser()->getId());
            $user->setAddress($data['address']);
            $user->setPhone($data['phone']);
            $this->entityManager->persist($user);
            $this->entityManager->flush();
        }

        return $this->render('settings/index.html.twig', [
            'form' => $f->createView(),
            'name' => $this->getUser()->getName(),
            'surname' => $this->getUser()->getSurname(),
            'rang' => $this->getUser()->getRang(),
            'email' => $this->getUser()->getEmail(),
            'group' => $this->getUser()->getStudentGroup(),
        ]);
    }
}
