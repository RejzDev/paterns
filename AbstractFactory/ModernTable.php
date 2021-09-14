<?php
    
    
    namespace paterns\AbstractFactory;
    
    
    class ModernTable implements Table
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
            return "ModernTable";
        }
    }