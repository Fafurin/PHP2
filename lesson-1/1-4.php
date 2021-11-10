<?php
class Product{
    private $title;
    private $description;
    private $price;
    private $quantity;

    public function __construct($title, $description, $price, $quantity){
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getDiscount($discount){
        $this->price = $this->price - $this->price * $discount / 100;
        echo $this->price;
    }
}

class Book extends Product{
    private $author;

    public function __construct($title, $description, $price, $quantity, $author){
        parent::__construct($title, $description, $price, $quantity);
        $this->author = $author;
    }
}




