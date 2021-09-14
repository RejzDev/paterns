<?php
    
    
    namespace paterns\FactoryMethod;
    
    
    class SeaLogistics extends Logistic
    {
    
        function createTransport(): Transport
        {
            return new Ship();
        }
    }