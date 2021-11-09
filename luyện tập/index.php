<?php
include("class_lib.php");
$stefan = new Person();
$jimmy = new Person();
$nam = new Person();
$thuy = new Person();
$bac = new Person();
$quan = new Person();
$ngoc = new Person();
$hoang = new Person();
$nguyen = new Person();

$stefan -> setName("Stefan Mischook");
$jimmy -> setName("Nick Waddles");
$nam -> setName("Chi My");
$thuy -> setName("Bigs");
$bac -> setName("Small");
$quan -> setName("Mun Hoang");
$ngoc -> setName("Dau Tay");
$hoang -> setName("Com COm");
$nguyen -> setName("Tink Tink");

echo "stefan's full name : " . $stefan -> getName();
echo "<br/>";
echo "Nick's full name : " . $jimmy -> getName();
echo "<br/>";
echo "CHi's full nmae: " . $nam -> getName();
echo "<br/>";
echo "Bigs full name : " .$thuy -> getName();
echo "<br/>";
echo "Small's full name : " . $bac -> getName();
echo "<br/>";
echo "Mun's full name : " . $quan -> getName();
echo "<br/>";
echo "Dau's full name : " . $ngoc -> getName();
echo "<br/>";
echo "Com's full name : " . $hoang -> getName();
echo "<br/>";
echo "Tink's full name : " . $nguyen -> getName();

?>