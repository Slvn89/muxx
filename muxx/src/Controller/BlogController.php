<?php
// src/Controller/BlogController.php

namespace App\Controller;

use App\Controller\ArticleController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function index(ArticleController $articleController): Response
    {
        // Fetch articles using the ArticleController
        $articlesResponse = $articleController->index($this->entityManager->getRepository(Article::class));
        $articlesContent = $articlesResponse->getContent();

        // Render the blog view and include the articles content
        return $this->render('blog/index.html.twig', [
            'articlesContent' => $articlesContent,
        ]);
    }
}

