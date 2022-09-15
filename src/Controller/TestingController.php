<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestingController extends AbstractController
{
    /**
     * @Route("/testing", name="tqtt")
     */
    public function index(): Response
    {

        $array = array(3, 6, -3, 5, -10, 3, 10, 1, 7, -1, -9, -8, 7, 7, -7, -2, -7, 11, -11);

        /**
        * @param int[] $data
         */
        function countOppositeNumbersPairs(array $data): int
        {
            $ct = 0;
            $i = 0;
            while($i<count($data)) {  
                $switch = true;    
                for($j=0; $j<count($data); $j++) {        
                    if($data[$i]+$data[$j]==0) {
                        $ct++;
                        array_splice($data, $i, 1);
                        array_splice($data, $j-1, 1);
                        $switch=false;             
                        break;
                    }
                }
                if($switch==true) {
                    array_splice($data, 0, 1);
                }
            }              
            return $ct;
        }

        echo countOppositeNumbersPairs($array);

        return $this->render('testing/index.html.twig', [
            'controller_name' => 'TestingController',
        ]);
    }
}
