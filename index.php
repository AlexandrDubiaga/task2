<?php
include('libs/Calculator.php');
include('config.php');
$obj = new Calculator();
$obj->setA(12);
$obj->setB(5);


include('template/index.php');
?>
