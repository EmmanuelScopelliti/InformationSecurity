<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexPage extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        $title = "Title Got From Controller";

        return $this->render('index/index.html.twig', [
            'title' => $title
        ]);
    }
}