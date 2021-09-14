<?php
    
    namespace paterns;
    
    class Singleton
    {
        private static $instance;
        //private $feald;
        
        private function __construct()
        {
        }
        
        private function __clone()
        {
        
        }
        
        private function __wakeup()
        {
        
        }
        
        public static function getInstance()
        {
            if (is_null(self::$instance)) {
                self::$instance = new self();
            }
            return self::$instance;
        }
        
        
    /*
       public function getFeald()
       {
           return $this->feald;
       }
    
       
       public function setFeald($feald)
       {
           $this->feald = $feald;
       }*/
        
        
    }
    
    $instance = Singleton::getInstance();
    //$instance->setFeald(1000);
    $instance2 = Singleton::getInstance();
    
    print_r($instance2);
    die();