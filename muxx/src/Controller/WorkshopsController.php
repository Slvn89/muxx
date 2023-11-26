<?php

// src/Controller/WorkshopsController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorkshopsController extends AbstractController
{
    /**
     * @Route("/workshops", name="workshops")
     */
    public function index(): Response
    {
        // Logique du contrôleur pour la page des ateliers
        return $this->render('workshops/index.html.twig');
    }
}
