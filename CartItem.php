<?php

class CartItem extends Cart
{
    private Product $product;
    private int $quantity;

    public function __construct(Product $product, $quantity) {
        $this->product  = $product;
        $this->quantity = $quantity;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @throws Exception
     */
    public function increaseQuantity($quantity = 1) {
        if ($this->getQuantity() + $quantity > $this->getProduct()->quantity()) {
            return 'Quantity not greater than'.$this->getProduct()->quantity();
        }
        $this->quantity += $quantity;
    }

    /**
     * @throws Exception
     */
    public function decreaseQuantity($quantity = 1) {
        if ($this->getQuantity() - $quantity < 1) {
             return 'Product Quantity can not be less than 1';
        }
        $this->quantity -= $quantity;
    }
}