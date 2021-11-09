<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    a: <input type="text" name="a" placeholder="nhap a">
    b: <input type="text" name="b" placeholder="nhap b">
    c: <input type="text" name="c" placeholder="nhap c">
    <input type="submit" value="check">
</form>
</body>
</html>
<?php
include("QuadraticEquation.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    $c = $_REQUEST["c"];

    $quadra = new QuadraticEquation($a, $b, $c);
    $quadra->getA();
    $quadra->getB();
    $quadra->getC();

    echo "denta = " . $quadra->getDiscriminant() . "<br/>";

    $quadra->getRoot();

}
