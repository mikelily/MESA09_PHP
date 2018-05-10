<?php
    include_once 'sql.php';
    include_once 'Product.php';
    include_once 'Cart.php';

    session_start();
    $cart = $_SESSION['cart'];
    $pid = $_REQUEST['pid'];
    $num = $_REQUEST['num'];
    $cart->addProduct($pid, $num);