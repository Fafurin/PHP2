<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index(): Response
    {
        $rep = $this->getDoctrine()->getRepository(Product::class);
        $products = $rep->findAll();

        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
