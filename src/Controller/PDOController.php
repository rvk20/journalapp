<?php

namespace App\Controller;

use PDO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PDOController extends AbstractController
{
    /**
     * @Route("/pdo", name="pdo")
     */
    public function index(): Response
    {
        $time_start = microtime(true); 
        $dsn = "mysql:host=localhost;dbname=japp;charset=utf8mb4";
        $pdo = new PDO($dsn, "root", "password");
        $sql = "SELECT * FROM rating";
        $stmt = $pdo->query($sql);

        while ($row = $stmt->fetch()) {
            echo "id: " . $row["id"]. " - Name: " . $row["user_id"]. " " . $row["grades"]. "<br>";
        }
        
       
          echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);
        echo '<br>Drugi pomiar: <br>';
        // Drugi pomiar

        $time_start = microtime(true); 
        $dsn = "mysql:host=localhost;dbname=japp;charset=utf8mb4";
        $pdo = new PDO($dsn, "root", "password");
        $sql = "SELECT r.id, u.name, u.surname, r.grades  FROM rating r INNER JOIN user u on r.user_id = u.id";
        $stmt = $pdo->query($sql);

        while ($row = $stmt->fetch()) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"] . " " . $row["surname"] . " " . $row["grades"]. "<br>";
        }
        
       
          echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);

        return $this->render('pdo/index.html.twig', [
            'controller_name' => 'PDOController',
        ]);
    }
}
