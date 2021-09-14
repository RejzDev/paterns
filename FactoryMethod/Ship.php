<?php
    
    
    namespace paterns\FactoryMethod;
    
    
    class Ship implements Transport
    {
    
        public function deliver()
        {
            echo "Доставка кораблем вантажу";
        }
    }