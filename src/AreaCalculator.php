<?php
namespace Jesus\Solid; 

/**
 * AreaCalculator
 * Ahora creamos la clase AreaCalculator, que recibe un array con los objetos de cada una de las figuras para ser sumadas
 */
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
      )
    ) ;
  }
}