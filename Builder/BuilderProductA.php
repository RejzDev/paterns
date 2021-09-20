<?php
    
    
    namespace paterns\Builder;
    
    
    use paterns\Builder\Product;

    class BuilderProductA extends BuilderProduct
    {
    
        public function buildName()
        {
            $this->product->setName('Кросівки');
        }
    
        public function buildParams()
        {
            $this->product->setParams(255);
        }
    }