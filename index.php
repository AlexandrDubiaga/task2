<?php
include('libs/Calculator.php');
include('config.php');

$obj = new Calculator();
$obj->setA(5);
$obj->setB(15);
$a = $obj->getA();
$b = $obj->getB();
$summation = $obj->plus();
$subtraction = $obj->minus();
$multiplication = $obj->mnoj();
$division = $obj->delete();
if(!$division)
{
    $zero = ZERO;
}
$rootOfNumberA = $obj->sqrtA();
$rootOfNumberB = $obj->sqrtB();
$storingTheSummationResultInMemory = $obj->MS();
$summoningTheSummationResultFromMemory = $obj->MR();
$clearingMemory = $obj->MC();
$addingNewDataToTheOldMemory = $obj->mPlus();
$subtractionOfMemoryNumber = $obj->mMinus();
$percentageOfTheNumber = $obj->procent();

include('template/index.php');

?>
