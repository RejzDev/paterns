<?php
    
    
    namespace paterns\Strategy;
    
    
    class LowDiscount implements Strategy
    {
        private $rate = 5;
        
        
        public function countDiscount($price)
        {
            $realPrice = $price - ($this->rate * $price) / 100;
    
            echo "Discount " . $this->rate . "%";
            echo "Discounted price " . $realPrice;
        }
    }