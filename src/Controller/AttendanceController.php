<?php

namespace App\Controller;

use App\Entity\Attendance;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AttendanceController extends AbstractController
{
    private $attendance;

    public function __construct(ManagerRegistry $doctrine) {
        $this->attendance = $doctrine->getRepository(Attendance::class);
    }

    /**
     * @Route("/attendance", name="app_attendance_student")
     */
    public function index(): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $id = $this->getUser()->getId();
        $attendance = $this->attendance->findBy(['User' => $id]);

        return $this->render('attendance/index.html.twig', [
            'attendance' => $attendance
        ]);
    }
}
