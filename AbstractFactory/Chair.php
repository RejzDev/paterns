<?php
    
    namespace paterns\AbstractFactory;
    
    
    interface Chair
    {
        public function hasLegs();
        public function sitOn();
        public function printName();
    }