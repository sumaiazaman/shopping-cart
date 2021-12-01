<?php

trait ProductTrait{
    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function price(): float
    {
        return $this->price;
    }

    public function quantity(): int
    {
        return $this->quantity;
    }

    public function addToCart(Cart $cart, int $quantity): array
    {
        return $cart->add($this, $quantity);
    }

    public function removeProduct(Cart $cart): array
    {
        return $cart->remove($this);
    }
}
