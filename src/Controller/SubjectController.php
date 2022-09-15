<?php

namespace App\Controller;

use App\Entity\Attendance;
use App\Entity\Event;
use App\Entity\Grade;
use App\Entity\Note;
use App\Entity\StudentGroup;
use App\Entity\User;
use App\Entity\Rating;
use App\Entity\Subject;
use DateTimeInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints\Length;

class SubjectController extends AbstractController
{
    
    private $subject;
    private $student;
    private $rating;
    private $entityManager;
    private $attendance;
    private $note;

    public function __construct(ManagerRegistry $doctrine){
        $this->studentgroup = $doctrine->getRepository(StudentGroup::class);
        $this->subject = $doctrine->getRepository(Subject::class);
        $this->student = $doctrine->getRepository(User::class);
        $this->rating = $doctrine->getRepository(Rating::class);
        $this->entityManager = $doctrine->getManager();
        $this->attendance = $doctrine->getRepository(Attendance::class);
        $this->note = $doctrine->getRepository(Note::class);
    }

    /**
     * @Route("/subject/{id}", name="app_subject")
     */
    public function index(int $id, Request $request): Response
    {

        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $subject = $this->subject->find($id);
        
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
                $wspaces = str_replace(' ', '', $data[$r->getId()]);
                $average = 0;
                $hm = 0;
                for($i=0; $i<strlen($wspaces);$i++) {
                    $average = $average + $wspaces[$i];
                    $hm++;
                }
                $nr->setAverage($average/$hm);
                $this->entityManager->persist($nr);
                $this->entityManager->flush();
            }
        }

        return $this->render('subject/index.html.twig', [
            'rating' => $rating,
            'form' => $f->createView(),
            'id' => $id,
            'sid' => $subject->getStudentGroup()->getId()
        ]);
    }

     /**
     * @Route("/subject/{id}/at/{sid}", name="app_attendance")
     */
    public function attendance(int $id, int $sid, Request $request): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $subject = $this->subject->find($id);
        
        if ($this->getUser()!=$subject->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $students = $this->student->findBy(['StudentGroup' => $sid]);
        $subject = $this->subject->find($id);
        $attendance = $this->attendance->findBy(['Subject' => $id]);
        $form1 = $this->createFormBuilder();

        foreach($students as $s){
            $form1
            ->add($s->getId(), CheckboxType::class, [
                'label' => $s->getSurname() . " " . $s->getName(),
                'data' => true,
                'required' => false]);
        }

        $form1
        ->add('Obecnosc', SubmitType::class, [
            'label' => "Sprawdź",
            'attr' => [
                'class' => 'btn btn-info btn-lg btn-block'
            ],
            
        ]);
        $f1 = $form1->getForm();
        $f1->handleRequest($request);

        if($f1->isSubmitted()) {
            $data = $f1->getData();
            foreach($students as $s){
                $na = new Attendance();
                $mark = 0;
                if($data[$s->getId()] == true){
                    $mark = 1;
                }
                $na->setUser($s);
                $na->setMark($mark);
                $na->setSubject($subject);
                $na->setDate();
                $this->entityManager->persist($na);
                $this->entityManager->flush();
            }
        }

        return $this->render('subject/attendance.html.twig', [
            'students' => $students,
            'attendance' => $attendance,
            'form1' => $f1->createView(),
            'id' => $id,
            'sid' => $sid
        ]);

    }

     /**
     * @Route("/subject/{id}/nt/{sid}", name="app_note")
     */
    public function note(int $id, int $sid): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $subject = $this->subject->find($id);
        
        if ($this->getUser()!=$subject->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $students = $this->student->findBy(['StudentGroup' => $sid]);
        
        if(isset($_POST['submit'])) {
            $note = new Note();
            $note->setStudent($this->student->find($_POST['student']));
            $note->setName($_POST['title']);
            $note->setDescription($_POST['note']);
            $note->setTeacher($this->getUser());
            $this->entityManager->persist($note);
            $this->entityManager->flush();
        }

        return $this->render('subject/note.html.twig', [
            'students' => $students,
            'id' => $id,
            'sid' => $sid
        ]);
    }

        /**
     * @Route("/subject/{id}/et/{sid}", name="app_event")
     */
    public function event(int $id, int $sid): Response
    {
        $subject = $this->subject->find($id);

        if ($this->getUser()!=$subject->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        if(isset($_POST['submit'])) {
            $event = new Event();
            $event->setName($_POST['title']);
            $event->setDescription($_POST['note']);
            $event->setDate($_POST['date']);
            $event->setSubject($subject);
            $this->entityManager->persist($event);
            $this->entityManager->flush();
        }

        return $this->render('subject/event.html.twig', [
            'id' => $id,
            'sid' => $sid
        ]);
    }
}
