<?php
    namespace paterns\Strategy;
    
    require_once '../vendor/autoload.php';
    
    $realPrice = new Product(100);
    $realPrice->productDiscount();