<?php
//array reduce
$numbers=array(1,2,3,4,5,6);
function sum($oldValue=0,$newValue){
    return $oldValue+$newValue;
}
$sum=array_reduce($numbers,"sum");
echo $sum."\n";
function sum1($oldValue=0,$newValue){
    if($newValue%2==0)
    return $oldValue+$newValue;

    return $oldValue;
}
$sum=array_reduce($numbers,"sum1");
echo $sum."\n";

?>