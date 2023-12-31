<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
   #[Route('/article', name: 'app_article')]
   public function index(ArticleRepository $repository): Response
   {
       $articles = $repository->findAll();
       dump($articles);
   
       return $this->render('article/index.html.twig', ['articles' => $articles]);
   }
}
