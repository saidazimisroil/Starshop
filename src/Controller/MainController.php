<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    // homepage controller
    #[Route('/')]
    public function index(): Response
    {
        $starshipCount = 457;

        $myShip = [
            'name' => 'USS LeafyCruiser (NCC-0001)',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'under construction',
        ];
        

        return $this->render('main/index.html.twig', [
            'numOfStarships' => $starshipCount,
            'myShip' => $myShip
        ]);
    }
}
