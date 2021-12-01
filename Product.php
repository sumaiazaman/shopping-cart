<?php

require_once "ProductTrait.php";

class Product
{
    use ProductTrait;

    private int $id;
    private string $name;
    private string $slug;
    private float $price;
    private int $quantity;

    public function __construct($id, $name, $slug, $price, $quantity) {
        $this->id       = $id;
        $this->name     = $name;
        $this->slug     = $slug;
        $this->price    = $price;
        $this->quantity = $quantity;
    }
}