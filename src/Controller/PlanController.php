<?php

namespace App\Controller;

use App\Entity\LessonPlan;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlanController extends AbstractController
{

    private $lessonplan;

    public function __construct(ManagerRegistry $doctrine) {
        $this->lessonplan = $doctrine->getRepository(LessonPlan::class);
    }

    /**
     * @Route("/plan", name="app_plan")
     */
    public function index(): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $id = $this->getUser()->getStudentGroup();
        $day1 = $this->lessonplan->findBy(['StudentGroup' => $id, 'day' => 1]);
        $day2 = $this->lessonplan->findBy(['StudentGroup' => $id, 'day' => 2]);
        $day3 = $this->lessonplan->findBy(['StudentGroup' => $id, 'day' => 3]);
        $day4 = $this->lessonplan->findBy(['StudentGroup' => $id, 'day' => 4]);
        $day5 = $this->lessonplan->findBy(['StudentGroup' => $id, 'day' => 5]);

        return $this->render('plan/index.html.twig', [
            'day1' => $day1,
            'day2' => $day2,
            'day3' => $day3,
            'day4' => $day4,
            'day5' => $day5,

        ]);
    }
}
