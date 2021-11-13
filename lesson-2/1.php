<?php

abstract class Product {

    protected string $title;
    protected float $price;
    protected int $quantity;

    public function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }

    abstract public function getPrice();
}

class DigitalProduct extends Product{

    public function __construct($title, $price, $quantity){
        parent::__construct($title, $price);
        $this->quantity = $quantity;
    }

    public function getPrice(){
        return $this->price * $this->quantity;
    }
}

class PieceProduct extends Product {

    public function __construct($title, $price, $quantity){
        parent::__construct($title, $price);
        $this->quantity = $quantity;
    }

    public function getPrice(){
        return $this->price * $this->quantity * 2;
    }
}

class WeightProduct extends Product {
    protected float $weight;

    public function __construct($title, $price, $weight){
        parent::__construct($title, $price);
        $this->weight = $weight;
    }

    public function getPrice(){
        return round($this->price * $this->weight, 2);
    }
}
