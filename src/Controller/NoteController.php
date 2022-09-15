<?php

namespace App\Controller;

use App\Entity\Note;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoteController extends AbstractController
{
    private $note;

    public function __construct(ManagerRegistry $doctrine) {
        $this->note = $doctrine->getRepository(Note::class);
    }
    /**
     * @Route("/note", name="app_note_student")
     */
    public function index(): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $id = $this->getUser()->getId();
        $note = $this->note->findBy(['Student' => $id], ['id' => 'DESC']);

        return $this->render('note/index.html.twig', [
            'note' => $note,
        ]);
    }
}
