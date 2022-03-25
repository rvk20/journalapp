<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="app_index")
     */
    public function index(): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $admin ='';
        $lesson = '';
        $roles = $this->getUser()->getRoles();
        if($roles[0]=='ROLE_ADMIN'){
          
        }


        return $this->render('index/index.html.twig', [
            'panel_admin' => $admin,
            'lesson_plan' => $lesson,
        ]);
    }
}
