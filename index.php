<?php

use shapes\Circle;
use shapes\Square;
use AreaCalculator;

// Para utilizar la clase AreaCalculator simplemente instanciamos la clase y le pasamos un array con las figuras, mostrando el output al final:
$shapes = array (
    new Circle(3),
    new Square(4)
);

$areas = new AreaCalculator($shapes);

echo $areas->output();