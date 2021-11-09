<?php
include ("Fan.php");
$fan1 = new Fan();
$fan1->toString();
$fan1->getSpeed(3);
$fan1->getRadius(10);
$fan1->getColor(yellow);
$fan1->getOn(true);
$fan2 = new Fan();
$fan2->toString();
$fan2->getSpeed(2);
$fan2->getRadius(5);
$fan2->getColor(blue);
$fan2->getOn(false);
