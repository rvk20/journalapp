<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MySQLIController extends AbstractController
{
    /**
     * @Route("/mysqli", name="mysqli")
     */
    public function index(): Response
    {
        $time_start = microtime(true); 

        $con = mysqli_connect("127.0.0.1","root","password","japp");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
        }

        $sql = "SELECT * FROM rating";
        $result = $con->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "id: " . $row["id"]. " - Name: " . $row["user_id"]. " " . $row["grades"]. "<br>";
            }
          } else {
            echo "0 results";
          }
          $con->close();
          echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);
          echo '</br> </br> Drugi pomiar: </br>';

        // Drugi pomiar

        $time_start = microtime(true); 

        $con = mysqli_connect("127.0.0.1","root","password","japp");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
        }

        $sql = "SELECT r.id, u.name, u.surname, r.grades  FROM rating r INNER JOIN user u on r.user_id = u.id";
        $result = $con->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "id: " . $row["id"]. " - Name: " . $row["name"] . " " . $row["surname"] . " " . $row["grades"]. "<br>";
            }
          } else {
            echo "0 results";
          }
          $con->close();
          echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);

        return $this->render('my_sqli/index.html.twig', [
            'controller_name' => 'MySQLIController',
        ]);
    }
}
