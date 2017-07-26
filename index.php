<?php
include('libs/Calculator.php');
include('config.php');

$obj = new Calculator();
$obj->setA(5);
$obj->setB(16);

include('template/index.php');
?>
