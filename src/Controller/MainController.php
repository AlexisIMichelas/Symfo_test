<?php

namespace App\Controller;

use App\Entity\Jeu;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_homepage')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $jeux = $entityManager->getRepository(Jeu::class)->findAll();

        return $this->render('main/index.html.twig', [
            'jeux' => $jeux,
        ]);
    }
}
