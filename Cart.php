<?php

require_once "CartTrait.php";
require_once "Message.php";

class Cart {
    use CartTrait;

    private array $cartItems = [];

    /**
     * @throws Exception
     */
    public function add(Product $product, int $quantity = 0)
    {
        $cartItem =  $this->searchCartItem($product->id());
        if ($cartItem === null) {
            $cartItem =  new CartItem($product, $quantity);
            $this->cartItems[$product->id()] = $cartItem;
            $message = self::setMessage(Message::CREATE_MESSAGE);
        } else {
            $cartItem->increaseQuantity($quantity);
            $message = self::setMessage(Message::UPDATE_MESSAGE);
        }
        return ['success' => $message];
        // return $cartItem;
    }

    public function searchCartItem(int $productId)
    {
        return $this->cartItems[$productId] ?? null;
    }
}