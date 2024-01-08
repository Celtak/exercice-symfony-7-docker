<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {

        function calculer() {
            $i = 0;           
            while ($i < 14000000000000) {
                $a = 12345*67890*10000;
                $a = 12345*67890*10000;
                $a = 12345*67890*10000;
                $a = 12345*67890*10000;
                $a = 12345*67890*10000;
                $a = 12345*67890*10000;

                $i++;
            }
        }

        calculer();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
