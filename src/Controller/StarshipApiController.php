<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Model\Starship;
use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(StarshipRepository $repository) : Response
    {
        $starships = $repository->findAll();

        return $this->json($starships);
        
    }
}