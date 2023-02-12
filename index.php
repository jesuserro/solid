<?php
Class Circle 
{
    public $radius;

    public function __construct($radius) 
    {
        $this->radius = $radius;
    }
}

Class Square 
{
    public $length;

    public function __construct($length) 
    {
        $this->length = $length;
    }
}
// Primero creamos las clases de las figuras y dejamos que los constructores se encarguen de recibir las medidas necesarias.

// Ahora creamos la clase AreaCalculator, que recibe un array con los objetos de cada una de las figuras para ser sumadas:

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        // Aquí va la lógica para sumar todas las áreas
    }

    public function output()
    {
        return implode('', array(
            "<h1>",
                "Suma de todas las áreas: ",
                $this->sum(),
            "</h1>"
        ));
    }
}
// Para utilizar la clase AreaCalculator simplemente instanciamos la clase y le pasamos un array con las figuras, mostrando el output al final:

$shapes = array (
    new Circle(3),
    new Square(4)
);

$areas = new AreaCalculator($shapes);

echo $areas->output();