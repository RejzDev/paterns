<?php
    
    
    namespace paterns\AbstractFactory;
    
    
    class VictorianTable implements Table
    {
    
        public function hasLegs()
        {
            return "Ніжки є.";
        }
    
        public function sitOn()
        {
            return "Сидіти на столі не можна.";
        }
    
        public function printName()
        {
            return "VictorianTable";
        }
    }