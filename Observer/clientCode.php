<?php
    namespace paterns\Observer;
    
    require_once '../vendor/autoload.php';
    
    $dolar = new Dolar();
    $dolar->setPrice(27);
    
    $dolarObserver = new DolarObserver();
    $dolar->attach($dolarObserver);
    
    $dolar->setPrice(26);
    $dolar->setPrice(25);
    
    print_r($dolarObserver->getPriceLog());
    