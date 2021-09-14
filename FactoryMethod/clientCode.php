<?php
    
    
    namespace paterns\FactoryMethod;
    
    require_once '../vendor/autoload.php';
    
    //Комент
    function clientCode(Logistic $logistic)
    {
        $logistic->planDelivery();
    }
    
    clientCode(new RoadLogistics());
    