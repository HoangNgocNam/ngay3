<?php
include_once "retangle.php";
$width = 10;
$height = 20;
$rectangle  = new Rectangle($width, $height);

echo $rectangle -> width;
echo "<br/>";
echo $rectangle -> height;
echo "<br/>";

$rectangle -> width = 20;
$rectangle -> height = 30;

echo $rectangle -> width ;
echo "<br/>";
echo $rectangle -> height;
echo "<br/>";
echo $rectangle -> getPerimeter();
echo "<br/>";
echo $rectangle -> getArea();
echo "<br/>";
echo ("Your Rectangle". $rectangle -> display());
?>