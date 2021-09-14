<?php
    
    
    namespace paterns\Builder;
    
    
    use Cassandra\Cluster\Builder;

    class Director
    {
        private $builder;
        
        public function setBuilder(BuilderProduct $builder)
        {
            $this->builder = $builder;
        }
        
        public function getProduct()
        {
            return $this->builder->getProduct();
        }
        
        public function create()
        {
            $this->builder->createProduct();
            $this->builder->buildName();
            $this->builder->buildParams();
        }
    }