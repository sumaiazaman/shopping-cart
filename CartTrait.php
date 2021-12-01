<?php

require_once "Message.php";

trait CartTrait {
    public function remove(Product $product) {
        unset($this->cartItems[$product->id()]);
        return [
            'success' => self::setMessage(Message::REMOVE_MESSAGE),
        ];
    }

    public function getItems(): array
    {
        return $this->cartItems;
    }

    public function quantity(): int
    {
        $quantity = 0;
        foreach ($this->cartItems as $item) {
            $quantity += $item->getQuantity();
        }
        return $quantity;
    }

    public function total() {
        $total = 0;
        foreach ($this->cartItems as $item) {
            $total += $item->getQuantity() * $item->getProduct()->price();
        }
        return $total;
    }

    public function setMessage($message) {
        return $message;
    }
}
