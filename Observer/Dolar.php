<?php
    
    
    namespace paterns\Observer;
    
    
    use SplObserver;
    use SplObjectStorage;
    use SplSubject;

    class Dolar implements SplSubject
    {
        private $price;
        private SplObjectStorage $observers;
        
        public function __construct()
        {
            $this->observers = new SplObjectStorage();
        }
    
    
        public function attach(SplObserver $observer)
        {
           $this->observers->attach($observer);
        }
    
        public function detach(SplObserver $observer)
        {
            $this->observers->detach($observer);
        }
    
        public function notify()
        {
            
            foreach ($this->observers as $observer){
                $observer->update($this);
            }
        }
    
        
        public function getPrice()
        {
            return $this->price;
        }
    
       
        public function setPrice($price): void
        {
            $this->price = $price;
            $this->notify();
        }
        
        
    
    }