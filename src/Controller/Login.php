<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Login extends AbstractController
{
    #[Route('/account/login')]
    public function login(string $username, string $password): Response
    {
        $username = "Temp";
        return $this->render('account/login.html.twig',
            [
                'username' => $username
            ]);
    }

}