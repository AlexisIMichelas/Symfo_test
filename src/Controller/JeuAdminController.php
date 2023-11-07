<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JeuAdminController extends AbstractController
{
    #[Route('/admin/jeu', name: 'admin_jeu')]
    public function index(): Response
    {
        return $this->render('jeu_admin/index.html.twig', [
            'message' => 'Bienvenue sur l\'administration',
        ]);
    }
}

