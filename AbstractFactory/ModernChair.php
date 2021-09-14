<?php
    
    
    namespace paterns\AbstractFactory;
    
    
    class ModernChair implements Chair
    {
    
        public function hasLegs()
        {
            return "Ніжок не має.";
        }
    
        public function sitOn()
        {
            return "Сидіти на кріслі можна.";
        }
    
        public function printName()
        {
            return "ModernChair";
        }
    }