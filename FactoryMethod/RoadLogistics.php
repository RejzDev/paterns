<?php
    
    
    namespace paterns\FactoryMethod;
    
    
    class RoadLogistics extends Logistic
    {
    
        function createTransport(): Transport
        {
            return new Truck();
        }
    }