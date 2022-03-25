<?php

namespace App\Controller\Admin;

use App\Entity\StudentGroup;
use App\Entity\Subject;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Eduon');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Strona główna', 'fa fa-home');
        yield MenuItem::linkToCrud('Klasy', 'fas fa-list', StudentGroup::class);
        yield MenuItem::linkToCrud('Użytkownicy', 'fas fa-list', User::class);
        yield MenuItem::linkToCrud('Przedmioty', 'fas fa-list', Subject::class);
        yield MenuItem::linkToRoute('Powrót', 'fas fa-door-open', 'app_index');
    }
}

