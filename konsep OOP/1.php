<?php
class Product
{
    public $name;
    public $price;
    public $description;

    public function _construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }    
}

$product1 = new Product('Smartpone', 5000000, 'smartpone terbaru dengan kamera berkualitas tinggi');
$product2 = new product('ROG', 5000000, 'smartpone qualty good');