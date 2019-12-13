<?php

class Square extends Shape
{
  const NB_SIDE = 4;
  private $side;

  public function __construct($side, $name)
  { //$this = $square.. dans l'index//
    $this->side=$side;
    parent :: __construct($name);
  }

  public function perimeter()
  {
    return $this->side * self::NB_SIDE;
  }
  public function area() {
    return $this->side * $this->side;
  }
}
