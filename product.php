<?php

class Product
{
    public $name;
    public $price;
    public $number_products;



    function __construct($_name, $_price, $_number_products = 0)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->number_products = ($_number_products);
    }

    public function getPrice()
    {
        return $this->price;
    }
}
