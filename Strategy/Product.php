<?php
    
    
    namespace paterns\Strategy;
    
    
    class Product
    {
        public $price = 0;
        
        public function __construct($price)
        {
            $this->price = $price;
        }
    
        
        public function getPrice()
        {
            return $this->price;
        }
    
        
        public function setPrice(int $price)
        {
            $this->price = $price;
        }
        
        public function productDiscount()
        {
            if ($this->price >=200){
                $discount = new highDiscount();
            } else {
                $discount = new lowDiscount();
            }
            
            $discount->countDiscount($this->price);
            
        }
        
        
    }