<?php

namespace App\Menu;

use App\Entity\StudentGroup;
use App\Entity\Subject;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;



class Builder 
{
    public function __construct(FactoryInterface $factory, AuthorizationCheckerInterface $authorizationChecker, TokenStorageInterface $tokenStorage, ManagerRegistry $doctrine)
    {
        $this->factory = $factory;
        $this->checker = $authorizationChecker;
        $this->user = $tokenStorage->getToken()->getUser();
        $this->group = $doctrine;
    }

    public function createMainMenu(array $options): ItemInterface
    {
        
        
   //     list-group-item list-group-item-action py-2 ripple active
        
        $menu = $this->factory->createItem('root', array(
            'childrenAttributes' => array(
                'class' => '',
                'style' => 'list-style-type:none;
                padding: 0;
                margin: 0;'
            )
        ));

        $id = $this->user->getId();
        $rang = $this->user->getRang();
        $subject = $this->group->getRepository(Subject::class)->findBy(
            ['User' => $id]
        );


        $menu->addChild('Dashboard', array(
            'route' => 'app_index', 
            'label' => '<i class="fa fa-home fa-fw me-3"></i><span>Główna</span>',
            'extras' => array('safe_label' => true,)
        )
        )->setLinkAttribute('class', 'list-group-item list-group-item-action py-2 ripple');

        $menu->addChild('Profile', array(
            'route' => 'app_profile', 
            'label' => '<i class="fas fa-address-card fa-fw me-3"></i><span>Profil</span>',
            'extras' => array('safe_label' => true,)
        )
        )->setLinkAttribute('class', 'list-group-item list-group-item-action py-2 ripple');
        
        if($rang == "student"){

        $menu->addChild('Rating', array(
            'route' => 'app_grade', 
            'label' => '<i class="fas fa-sticky-note fa-fw me-3"></i><span>Oceny</span>',
            'extras' => array('safe_label' => true,)
        )
        )->setLinkAttribute('class', 'list-group-item list-group-item-action py-2 ripple');

        $menu->addChild('Agenda', array(
            'route' => 'app_plan', 
            'label' => '<i class="far fa-calendar-alt fa-fw me-3"></i><span>Rozkład zajęć</span>',
            'extras' => array('safe_label' => true,)
        )
        )->setLinkAttribute('class', 'list-group-item list-group-item-action py-2 ripple');

        }

        if(isset($subject)) {

            foreach($subject as $s)
            {
                $menu->addChild('subject' . $s->getId(), array(
                    'route' => 'app_subject',
                    'routeParameters' => ['id' => $s->getId()],
                    'label' => '<i class="fas fa-users fa-fw me-3"></i><span>'.$s->getName().' - '.$s->getStudentGroup().' </span>',
                    'extras' => array('safe_label' => true)
                )
                )->setLinkAttribute('class', 'list-group-item list-group-item-action py-2 ripple', 'id', 'ac');
            }
        }

        $menu->addChild('Settings', array(
            'route' => 'app_settings', 
            'label' => '<i class="far fa-sun fa-fw me-3"></i><span>Ustawienia</span>',
            'extras' => array('safe_label' => true,)
        )
        )->setLinkAttribute('class', 'list-group-item list-group-item-action py-2 ripple');

        if($this->checker->isGranted('ROLE_ADMIN')) {

            $menu->addChild('plan', array(
                'route' => 'lesson', 
                'label' => '<i class="fas fa-edit fa-fw me-3"></i><span>Plany lekcji</span>',
                'extras' => array('safe_label' => true)
            )
            )->setLinkAttribute('class', 'list-group-item list-group-item-action py-2 ripple', 'id', 'ac');

            $menu->addChild('admin', array(
                'route' => 'admin', 
                'label' => '<i class="fas fa-wrench fa-fw me-3"></i><span>Administrator</span>',
                'extras' => array('safe_label' => true)
            )
            )->setLinkAttribute('class', 'list-group-item list-group-item-action py-2 ripple', 'id', 'ac');
        }

        
        
        


        //list-group-item list-group-item-action py-2 ripple active
        
       
     

        // ... add more children

        return $menu;
    }
}