<?php
    
    
    namespace paterns\Observer;
    
    
    use SplSubject;

    class DolarObserver implements \SplObserver
    {
        private array $priceLog = [];
        
        public function update(SplSubject $subject)
        {
            $this->priceLog[] = $subject->getPrice();
        }
    
        
        public function getPriceLog(): array
        {
            return $this->priceLog;
        }
    
        
    }