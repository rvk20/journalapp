<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="app_profile")
     */
    public function index(): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('profile/index.html.twig', [
            'name' => $this->getUser()->getName(),
            'surname' => $this->getUser()->getSurname(),
            'rang' => $this->getUser()->getRang(),
            'address' => $this->getUser()->getAddress(),
            'phone' => $this->getUser()->getPhone(),
            'email' => $this->getUser()->getEmail(),
            'group' => $this->getUser()->getStudentGroup(),
        ]);
    }
}
