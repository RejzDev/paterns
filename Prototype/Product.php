<?php
    
    
    namespace paterns;


    class Product
    {
        public $name;
        public $date;
        
    
        public function __clone()
        {
            $this->date = clone $this->date;
           
            
        }
    }
    

    /**
     * The client code.
     */
    function clientCode()
    {
        $product1 = new Product();
        $product1->name = "Ноутбук";
        $product1->date = new \DateTime();
       
        $product2 = clone $product1;
        $product1->name = "ПК";
        
        var_dump($product1);
        var_dump($product2);
    }

    clientCode();