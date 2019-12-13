<?php
require('class/Shape.php');
require('class/Square.php');
require('class/Round.php');
require('class/Triangle.php');


$square1 = new Square(10, "carré 1");
$square2 = new Square(24, "carré 2");

$square1->displayPerimeter('mm');
echo '<br/>';
$square1->displayArea();
echo '<br/>';
$square2->displayPerimeter();
echo '<br/>';
echo "Le carre 2 a une surface de ", $square2->area();
echo '<br/>';

$round1 = new Round(8, "rond1");

$round1->displayPerimeter();
echo '<br/>';
echo "La surface du cercle est de ", $round1->area();
echo '<br/>';
$round1->displayArea('mm');
echo '<br/>';

$triangle1 = new Triangle(9, 12, 15, "triangle1");
$triangle1->displayPerimeter();
echo '<br/>';
echo "La surface du triangle est de ", $triangle1->area();
echo '<br/>';
