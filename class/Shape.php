<?php


abstract class Shape // classe abstraite que l'on ne peut pas instancier
{
  const UNIT = 'cm';
  protected $name;
  abstract public function perimeter();
  abstract public function area();

  public function __construct($name)
  {
    $this->name=$name;
  }

  public function displayPerimeter($unit = 'cm')
  {
    if ($unit === 'mm') {
      $perimeter = $this->perimeterToMm();
    } else {
      $perimeter = $this->perimeter();
    }

    echo "Le " . $this->name . " a un périmètre de " . $perimeter . $unit;
  }

  public function displayArea($unit = 'cm')
  {
    if ($unit === 'mm') {
      $area = $this->areaToMm();
    } else {
      $area = $this->area();
    }
    echo "Le " . $this->name . " a un périmètre de " . $area . $unit . "&sup2;";
  }

  public function areaToMm()
  {
    return $this->area() * 10;
  }

  public function perimeterToMm()
  {
    return $this->perimeter() * 10;
  }
}


?>
