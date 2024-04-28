<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    // homepage controller
    #[Route('/', methods:['GET'], name:'app_main_homepage')]
    public function index(StarshipRepository $starshipRepository): Response
    {
        $ships = $starshipRepository->findAll();

        $myShip = $ships[array_rand($ships)];
        

        return $this->render('main/index.html.twig', [
            'myShip' => $myShip,
            'ships' => $ships
        ]);
    }
}
