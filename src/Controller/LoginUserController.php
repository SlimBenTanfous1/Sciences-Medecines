<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LoginUserController extends AbstractController
{
    #[Route('/seConnecter/user', name: 'app_login_user')]
    public function connectionUser(): Response
    {
        return $this->render('login_user/login.html.twig', [
            'controller_name' => 'LoginUserController',
        ]);
    }
    #[Route('/seDeconnecter/user', name: 'app_login_user')]
    public function deconnectionUser(): Response
    {
        return $this->render('login_user/login.html.twig', [
            'controller_name' => 'LoginUserController',
        ]);
    }

}
