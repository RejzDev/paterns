<?php
    
    namespace paterns\Builder;
    
    require_once '../vendor/autoload.php';

    $director = new Director();
    $productA = new BuilderProductA();
    $productB = new BuilderProductB();
    $director->setBuilder($productA);
    $director->create();
    $product = $director->getProduct();
    
    var_dump($product);