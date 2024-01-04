<?php
$numbers=array(1,2,3,4,5,6,7,8,9,10,11,12);
function square($n){
    printf("Square of %d is %d\n",$n,$n*$n);
}
array_walk($numbers,"square");
function cube($n){
    return $n*$n*$n;
}
$newarray=array_map("cube",$numbers);
print_r($newarray);
function even($n){
    return $n%2==0;
}
function odd($n){
    return $n%2==1;
}
//callback function 
$evenarray=array_filter($numbers,"even");
print_r($evenarray);
$oddarray=array_filter($numbers,"odd");
print_r($oddarray);
$person=array("sujon","kabir","saba","roni","selim","jamal");
function filterbyS($name){
    return $name[0]=='s';
} 
$newperson=array_filter($person,"filterbyS");

print_r($newperson);

?>