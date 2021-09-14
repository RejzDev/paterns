<?php
    
    namespace paterns\AbstractFactory;
    
    
    interface FurnitureFactory
    {
        public function createChair(): Chair;
        public function createTable(): Table;
    }