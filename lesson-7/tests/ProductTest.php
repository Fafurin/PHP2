<?php
namespace App\Tests\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductTest extends WebTestCase
{
    public function testLogin(){
        $client = static::createClient();
        $client->request('GET', '/product');
        $this->assertResponseStatusCodeSame(200);
        $this->assertSelectorTextContains('h1', 'Controller');
    }

    protected function setUp() : void{
        $this->user = new User();
    }
}