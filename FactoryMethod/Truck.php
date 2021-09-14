<?php
    
    
    namespace paterns\FactoryMethod;
    
    
    class Truck implements Transport
    {
    
        public function deliver()
        {
            echo "Доставка вантажівкою вантажу";
        }
    }