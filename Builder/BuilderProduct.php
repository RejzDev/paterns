<?php
    
    
    namespace paterns\Builder;
    
    
    abstract class BuilderProduct
    {
        protected $product;
    
        /**
         * @return mixed
         */
        public function getProduct()
        {
            return $this->product;
        }
        
        public function createProduct(){
            $this->product = new Product();
        }
        
        abstract public function buildName();
        
        abstract public function buildParams();
    }