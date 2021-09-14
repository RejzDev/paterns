<?php
    
    
    namespace paterns\AbstractFactory;
    
    
    class ModernFactory implements FurnitureFactory
    {
    
        public function createChair(): Chair
        {
            return new ModernChair();
        }
    
        public function createTable(): Table
        {
            return new ModernTable();
        }
    }