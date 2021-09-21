<?php
    
    
    namespace paterns\Iterator;


    class Book
    {
        protected $name;
    
        public function __construct(string $name)
        {
            $this->name = name;
        }
    
        public function getName(): float
        {
            return $this->name;
        }
    }