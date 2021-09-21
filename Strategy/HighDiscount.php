<?php
    
    
    namespace paterns\Strategy;
    
    
    class HighDiscount implements Strategy
    {
        private $rate = 30;
    
    
        public function countDiscount($price)
        {
            $realPrice = $price - ($this->rate * $price) / 100;
            
            echo "Discount " . $this->rate . "%";
            echo "Discounted price " . $realPrice;
        }
    }