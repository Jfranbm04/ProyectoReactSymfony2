<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class jfbmController
{
    #[Route('/api/jfbm', name: 'api_jfbm')]
    public function index(): Response
    {
        return new Response('Symfony de Juan Francisco Burgos Responde a la llamada de
React');
    }
}
