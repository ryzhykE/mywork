<?php

include_once ("conf.php");
include_once ("lib/Calculator.php");

$result = new \lib\Calclator();

$result->setA(6);
$result->setB(2);
$result->setM(10);
$firstN = $result->getA();
$secondN = $result->getB();
$mem = $result->getM();

$sum = $result->sum();
$minus = $result->minus();
$multi = $result->multi();
$devide = $result->devide();

$sqr = $result->sqr();
$persent = $result->persent();

$memory = $result->getM();
$memoryP = $result->plusM(5);
$memoryM = $result->minusM(5);
$memoryC = $result->clearM();

include_once ("template.php");
