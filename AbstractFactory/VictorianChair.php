<?php
    
    
    namespace paterns\AbstractFactory;
    
    
    class VictorianChair implements Chair
    {
    
        public function hasLegs()
        {
            return "Ніжки є.";
        }
    
        public function sitOn()
        {
            return "Сидіти на кріслі можна.";
        }
    
        public function printName()
        {
            return "VictorianChair";
        }
    }