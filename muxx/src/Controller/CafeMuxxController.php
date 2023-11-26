<?php

// src/Controller/CafeMuxxController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CafeMuxxController extends AbstractController
{
    /**
     * @Route("/cafe-muxx", name="cafe_muxx")
     */
    public function index(): Response
    {
        return $this->render('cafe_muxx/index.html.twig');
    }
}
