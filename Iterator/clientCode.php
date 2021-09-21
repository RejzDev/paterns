<?php
    
    namespace paterns\Iterator;
    
    require_once '../vendor/autoload.php';




    $listBooks = new ListBooks();
    
    $listBooks->addStation(new ListBooks("Book1"));
    $listBooks->addStation(new ListBooks("Book2"));
    $listBooks->addStation(new ListBooks("Book3"));
    $listBooks->addStation(new ListBooks("Book4"));
    
    
    
    foreach($listBooks as $book) {
        echo $book->getName() . PHP_EOL;
    }
    
    
