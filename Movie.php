<?php

class Movie 
{
    private $name;
    private $description = 'Test blah 123';
    private $exitDay = 2000;
    
    public function __construct($name = "")
    {
        $this->name = $name;
    }
   
   public function getName()
   {
       return $this->name;
   }
   
   public function setName($name = "")
   {
       $this->name = $name;
   }
  
   
   
   public function display()
   {
       echo $this->name;
       echo $this->description;
       echo $this->exitDay;
   }
    
}
$pls = new Movie("PLS");
$pls->display();


