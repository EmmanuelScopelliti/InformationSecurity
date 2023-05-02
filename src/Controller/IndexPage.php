<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexPage extends AbstractController
{
    #[Route('/index/index')]
    public function index(): Response
    {
        $title = "Title Got From Controller";

        return $this->render('index/index.html.twig', [
            'title' => $title
        ]);
    }
}