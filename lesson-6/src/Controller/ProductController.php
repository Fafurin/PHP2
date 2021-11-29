<?php

namespace App\Controller;

use App\Entity\Category;
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
//        $rep = $this->getDoctrine()->getRepository(Product::class);
//        $products = $rep->findAll();

        $manager = $this->getDoctrine()->getManager();
        $category = new Category();
        $category->setTitle('Electronics');

        for($i = 0; $i < 10; $i++) {
            $product = new Product();
            $product->setCategoryId(1);
            $product->setTitle('SomeProduct' . $i);
            $product->setPrice(123.12);
            $product->setQuantity(11);
            $product->setStatus(1);
            $product->setDescription('qweqweqwdqwd');

            $manager->persist($product);
        }
        $manager->flush();


        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
