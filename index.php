<?php
require_once "vendor/autoload.php";
require_once "Product.php";
require_once "Cart.php";
require_once "CartItem.php";
require_once "ProductTrait.php";

$product1 = new Product(1, 'Product 1','pro-1', 100, 2);
$product2 = new Product(2,'Product 2','pro-2',200, 3);
$product3 = new Product(3, 'Product 3','pro-3',300, 4);

$cart = new Cart();
$cartItem1 = $cart->add($product1, 1);
//$cartItem2 = $cart->add($product2, 1);
$product2->addToCart($cart, 1);

dd($cart);

/*dump($cart);
dump($product2->addToCart($cart, 1));
dump($cart);
dump($product2->removeProduct($cart));
dump($cart);


dump("Number of item in cart: ".$cart->quantity());
dump("Cart items total price: ".$cart->total());
dump("Cart items total price: ".$cart->total());*/
