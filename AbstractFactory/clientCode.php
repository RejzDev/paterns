<?php
    
   
    
    namespace paterns\AbstractFactory;
    
    require_once '../vendor/autoload.php';
    
    function clientCode(FurnitureFactory $factory)
    {
        print "\n";
        print $factory->createChair()->printName();
        print "<br>";
        print $factory->createChair()->sitOn();
        print "<br>";
        print $factory->createChair()->hasLegs();
        print "<br>";
        print $factory->createTable()->printName();
        print "<br>";
        print $factory->createTable()->sitOn();
        print "<br>";
        print $factory->createTable()->hasLegs();
        print "<br>";
    }
    
    $modernFactory = new ModernFactory();
    clientCode($modernFactory);
    
   $victorianFactory = new VictorianFactory();
   clientCode($victorianFactory);