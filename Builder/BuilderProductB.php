<?php
    
    
    namespace paterns\Builder;
    
    
    class BuilderProductB extends BuilderProduct
    {
    
        public function buildName()
        {
            $this->product->setName('Джинси');
        }
    
        public function buildParams()
        {
            $this->product->setParams(180);
        }
    }