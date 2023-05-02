<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Register extends AbstractController
{
    #[Route('/account/register')]
    public function register(string $email, string $username, string $password): Response
    {
        $username = "Temp";
        return $this->render('account/register.html.twig',
        [
            'username' => $username
        ]);
    }
}