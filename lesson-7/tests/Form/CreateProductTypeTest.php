<?php

namespace App\Tests\Form;

use App\Entity\Product;
use App\Form\CreateProductType;
use Symfony\Component\Form\Test\TypeTestCase;

class CreateProductTypeTest extends TypeTestCase
{
    public function testSubmitValidData(){

        $formData = [
          'title' => 'Product Title',
          'price' => 999,
          'description' => 'Product Description',
          'quantity' => 99,
        ];

        $product = new Product();
        $product->setTitle('Product Title');
        $product->setPrice(999);
        $product->setDescription('Product Description');
        $product->setQuantity(99);


        $form = $this->factory->create(CreateProductType::class);
        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($product, $form->getData());

        $view = $form->createView();
        $children = $view->children;

        foreach (array_keys($formData) as $key){
            $this->assertArrayHasKey($key, $children);
        }
    }
}