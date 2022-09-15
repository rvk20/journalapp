<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Subject;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    private $event;
    private $subject;

    public function __construct(ManagerRegistry $doctrine) {
        $this->event = $doctrine->getRepository(Event::class);
        $this->subject = $doctrine->getRepository(Subject::class);
    }

    /**
     * @Route("/event", name="app_event_student")
     */
    public function index(): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $id = $this->getUser()->getStudentGroup();
        $subject = $this->subject->findBy(['StudentGroup' => $id]);
        $event = $this->event->findBy(['Subject' => $subject], ['id' => 'DESC']);

        return $this->render('event/index.html.twig', [
            'event' => $event
        ]);
    }
}
