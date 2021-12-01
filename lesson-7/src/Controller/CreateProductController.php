<?php

namespace App\Controller;

use App\Form\CreateProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateProductController extends AbstractController
{
    /**
     * @Route("/create/product", name="create_product")
     */
    public function index(): Response
    {
        $form = $this->createForm(CreateProductType::class);

        return $this->render('create_product/index.html.twig', [
            'controller_name' => 'CreateProductController',
            'form' => $form->createView(),
        ]);
    }
}
