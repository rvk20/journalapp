<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\StudentGroup;
use App\Entity\Subject;
use App\Entity\LessonPlan;
use Doctrine\Persistence\ManagerRegistry;


class LessonController extends AbstractController
{
    private $group;

    public function __construct(ManagerRegistry $doctrine)
    {
        $repository = $doctrine->getRepository(StudentGroup::class);
        $this->group = $repository->findAll();
    }
    
    /**
     * @Route("/lesson", name="lesson")
     */
    public function index(): Response
    { 
        return $this->render('lesson/index.html.twig', [
            'group' => $this->group,
        ]);
    }

    /**
     * @Route("/lesson/{id}", name="lessonplan")
     */
    public function plan(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $subjects = $doctrine->getRepository(Subject::class)
        ->findBy(['StudentGroup' => $id]);
        $plan = $doctrine->getRepository(LessonPlan::class)
        ->findBy(['StudentGroup' => $id]);
        $studentgroup = $doctrine->getRepository(StudentGroup::class)
        ->findOneBy(['id' => $id]);

        if(!$plan){           
            for($i=1;$i<6;$i++){
                for($j=1;$j<9;$j++){
                    $plan = new LessonPlan();
                    $plan->setName("Brak zajęć");
                    $plan->setDay($i);
                    $plan->setNumber($j);
                    $plan->setStudentGroup($studentgroup);
                    $entityManager->persist($plan);
                    $entityManager->flush();
                }
            }
            $plan = $doctrine->getRepository(LessonPlan::class)
            ->findBy(['StudentGroup' => $id]);
        }



        if(isset($_POST['submit'])){
            for($i=1;$i<6;$i++){
                for($j=1;$j<9;$j++){
                    $subject = $doctrine->getRepository(LessonPlan::class)
                    ->findOneBy(['number' => $j, 'day' => $i, 'StudentGroup' => $id]);
                    $subject->setName($_POST['s' . $i . $j]);
                    $entityManager->persist($subject);
                    $entityManager->flush();
                }
            }
        }
        
        return $this->render('lesson/plan.html.twig', [
            'group' => $this->group,
            'subjects' => $subjects,
            'plan' => $plan
        ]);
    }
}
