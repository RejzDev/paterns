<?php
    
    
    namespace paterns\Builder;
    
    
    class Product
    {
        private $name;
        private $params;
    
        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }
    
        /**
         * @param mixed $params
         */
        public function setParams($params)
        {
            $this->params = $params;
        }
        
        
        
    }