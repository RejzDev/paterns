<?php
    
    
    namespace paterns\AbstractFactory;
    
    
    class VictorianFactory implements FurnitureFactory
    {
    
        public function createChair(): Chair
        {
            return new VictorianChair();
        }
    
        public function createTable(): Table
        {
            return new VictorianTable();
        }
    }