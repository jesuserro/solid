<?php
require_once __DIR__ . '/vendor/autoload.php';

use Jesus\Solid\shape\Circle;
use Jesus\Solid\shape\Square;
use Jesus\Solid\AreaCalculator;

// Para utilizar la clase AreaCalculator simplemente instanciamos la clase y le pasamos un array con las figuras, mostrando el output al final:
$shapes = array (
    new Circle(3),
    new Square(4)
);

$areas = new AreaCalculator($shapes);

echo $areas->output();





