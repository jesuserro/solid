<?php
namespace Jesus\Solid\shape; 

Class Circle 
{
    public $radius;

    public function __construct($radius) 
    {
        $this->radius = $radius;
        echo "Instantiating Circle\n";
    }
}