<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokeController extends AbstractController
{
    #[Route('/poke', name: 'app_poke')]
    public function index(): Response
    {
        return $this->render('poke/index.html.twig', [
            'controller_name' => 'PokeController',
        ]);
    }
}
