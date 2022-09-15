<?php

namespace App\Controller;

use App\Entity\Rating;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DoctrineController extends AbstractController
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine){
        $this->doctrine = $doctrine;
    }

    /**
     * @Route("/doctrine", name="doctrine")
     */
    public function index(): Response
    {
        $time_start = microtime(true); 
        $rating = $this->doctrine->getRepository(Rating::class)->findAll();
        foreach($rating as $r) {
            echo 'Id: ' . $r->getId() . 'Name: ' . $r->getUser() . ' ' . $r->getGrades() . '<br>';
        }
        echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);

        return $this->render('doctrine/index.html.twig', [
            'controller_name' => 'DoctrineController',
        ]);
    }
}
