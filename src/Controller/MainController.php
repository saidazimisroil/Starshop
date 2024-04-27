<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    // homepage controller
    #[Route('/')]
    public function index(): Response
    {
        return new Response('<strong>Starsho</strong> - is RUNNING!');
    }
}
