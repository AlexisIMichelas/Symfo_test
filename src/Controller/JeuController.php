<?php

namespace App\Controller;

use App\Entity\Jeu;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class JeuController extends AbstractController
{
    #[Route('/jeu/{id}', name: 'app_jeu')]
    public function show(Jeu $jeu): Response
    {
        return $this->render('jeu/index.html.twig', [
            'jeu' => $jeu,
        ]);
    }

    #[Route('/jeu/{id}/detail', name: 'app_jeu_detail')]
    public function index(int $id, EntityManagerInterface $entityManager): Response
    {
        $jeu = $entityManager->getRepository(Jeu::class)->find($id);
    
        if (!$jeu) {
            throw $this->createNotFoundException('Jeu non trouvé');
        }
    
        return $this->render('main/index.html.twig', [
            'jeu' => $jeu,
        ]);
    }
}

