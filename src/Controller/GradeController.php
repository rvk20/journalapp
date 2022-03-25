<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Rating;
use App\Entity\User;

class GradeController extends AbstractController
{
    private $rating;
    private $user;

    public function __construct(ManagerRegistry $doctrine){
        $this->rating = $doctrine->getRepository(Rating::class);
        $this->user = $doctrine->getRepository(User::class);
    }

    /**
     * @Route("/grade", name="app_grade")
     */
    public function index(): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $id = $this->getUser()->getId();
        $rating = $this->rating->findBy(['User' => $id]);

        return $this->render('grade/index.html.twig', [
            'rating' => $rating,
        ]);
    }
}
