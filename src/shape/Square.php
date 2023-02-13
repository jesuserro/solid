<?php
namespace Jesus\Solid\shape; 

Class Square 
{
    public $length;

    public function __construct($length) 
    {
        $this->length = $length;
        echo "Instantiating Square\n";
    }
}