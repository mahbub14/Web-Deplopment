<?php
function evenOrOdd($n){
    if($n%2==0){
        return true;
    }
    else return false;
}

function factorial($n){
    $result=1;
    for($i=$n;$i>=1;$i--){
        $result*=$i;
    }
    return $result;
}
function sarve($food,$item){
    echo"{$food} {$item} has been sarve";
}
function sum(int $x,int $y):int{
   
    return $x+$y;
}
function sum1(int $x=0,int $y=0,int $z=0):int{
   
    return $x+$y+$z;
}
function sum2(int...$number):int{
    $result=0;
    for($i=0;$i<count($number);$i++){
        $result+=$number[$i];
    }
    return $result;
}
echo sum1(5,6,7);
?>