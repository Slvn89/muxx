<?php
// src/Controller/ShopAgenceeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopAgenceeController extends AbstractController
{
    /**
     * @Route("/shop-agencee", name="shop_agencee")
     */
    public function index(): Response
    {
        return $this->render('shop_agencee/index.html.twig');
    }
}
