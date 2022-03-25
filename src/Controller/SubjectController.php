<?php

namespace App\Controller;

use App\Entity\Grade;
use App\Entity\StudentGroup;
use App\Entity\User;
use App\Entity\Rating;
use App\Entity\Subject;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class SubjectController extends AbstractController
{
    private $studentgroup;
    private $subject;
    private $student;
    private $rating;
    private $entityManager;

    public function __construct(ManagerRegistry $doctrine){
        $this->studentgroup = $doctrine->getRepository(StudentGroup::class);
        $this->subject = $doctrine->getRepository(Subject::class);
        $this->student = $doctrine->getRepository(User::class);
        $this->rating = $doctrine->getRepository(Rating::class);
        $this->entityManager = $doctrine->getManager();
    }

    /**
     * @Route("/subject/{id}", name="app_subject")
     */
    public function index(int $id, Request $request): Response
    {

        $subject = $this->subject->find($id);
        

        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        if ($this->getUser()!=$subject->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $sid = $subject->getStudentGroup();
        $students = $this->student->findBy(['StudentGroup' => $sid]);

        foreach($students as $s){
            if(!$this->rating->findBy(['User' => $s, 'Subject' => $id])){
                $rating = new Rating();
                $rating->setUser($s);
                $rating->setStudentGroup($s->getStudentGroup());
                $rating->setSubject($subject);
                $this->entityManager->persist($rating);
                $this->entityManager->flush();
            }
        }

        $rating = $this->rating->findBy(['Subject' => $id, 'StudentGroup' => $sid], ['User' => 'ASC']);
        
        $i = 0;
        $form = $this->createFormBuilder();
        
        foreach($rating as $r){
            $form
            ->add($r->getId(), null, [
                'label' => $r->getUser()]);
            $form->get($r->getId())->setData($r->getGrades());
        }
        $form
        ->add('Aktualizuj', SubmitType::class, [
            'attr' => [
                'class' => 'btn btn-info btn-lg btn-block'
            ],
            
        ]);
        $f = $form->getForm();

        $f->handleRequest($request);

        if($f->isSubmitted()) {
            $data = $f->getData();
            foreach($rating as $r){
                $nr = $this->rating->find($r->getId());
                $nr->setGrades($data[$r->getId()]);
                $this->entityManager->persist($subject);
                $this->entityManager->flush();
            }
        }

        return $this->render('subject/index.html.twig', [
            'rating' => $rating,
            'form' => $f->createView()
        ]);
    }
}
