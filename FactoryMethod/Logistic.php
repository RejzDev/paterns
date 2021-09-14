<?php
    
    
    namespace paterns\FactoryMethod;
    
    
   abstract class Logistic
    {
       abstract function createTransport(): Transport;
       
       public function planDelivery()
       {
           $transport = $this->createTransport();
           $transport->deliver();
       }
    }