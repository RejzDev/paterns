<?php
    
    
    namespace paterns\Iterator;


    use Countable;
    use Iterator;

    class ListBooks implements Countable, Iterator
    {
        
        protected $books = [];
        protected $counter;
    
        public function addBook(ListBooks $books)
        {
            $this->books[] = $books;
        }
    
        public function removeBook(ListBooks $toRemove)
        {
            $toRemoveName = $toRemove->getName();
            $this->books = array_filter($this->books, function (ListBooks $books) use ($toRemoveName) {
                return $books->getName() !== $toRemoveName;
            });
        }
    
        public function count(): int
        {
            return count($this->books);
        }
    
        public function current(): ListBooks
        {
            return $this->books[$this->counter];
        }
    
        public function key()
        {
            return $this->counter;
        }
    
        public function next()
        {
            $this->counter++;
        }
    
        public function rewind()
        {
            $this->counter = 0;
        }
    
        public function valid(): bool
        {
            return isset($this->books[$this->counter]);
        }
    }