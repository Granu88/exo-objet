<?php


class Round extends Shape
{
  private $ray;

  public function __construct($ray, $name)
  {
    $this->ray=$ray;
    parent :: __construct($name);
  }

  public function perimeter($decimals = 2)//2 nombres après la virgule//
  {
    return round(2 * pi() * $this->ray, $decimals);
  }
  public function area()
  {
    return pi() * ($this->ray * $this->ray); //pi(*pow($this->ray,2))
  }
}


?>
