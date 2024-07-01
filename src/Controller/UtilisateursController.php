<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UtilisateursController extends AbstractController
{
    #[Route('/utilisateurs', name: 'app_utilisateurs')]
    public function index(): Response
    {
        return $this->render('utilisateurs/login.html.twig', [
            'controller_name' => 'UtilisateursController',
        ]);
    }
    #[Route('/ajouter/user', name:'app_ajouter')]
    public function ajouterUser(): Response
    {
        return $this->render('utilisateurs/ajouter.html.twig', [
            'controller_name' => 'UtilisateursController',
        ]);
    }

    #[Route('/modifier/user', name:'app_modifier')]
    public function modifierUser(): Response
    {
        return $this->render('utilisateurs/modifierUser.html.twig', [
            'controller_name' => 'UtilisateursController',
        ]);
    }

    #[Route('/supprimer/user', name:'app_supprimer')]
    public function supprimerUser(): Response
    {
        return $this->render('utilisateurs/supprimerUser.html.twig', [
            'controller_name' => 'UtilisateursController',
        ]);
    }

}
