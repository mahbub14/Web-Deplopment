<?php
$person=array(
    'fname'=>'hello',
    'lname'=>'world'
);
//deep copy || copy by value
$newperson=$person;
$newperson['lname']='Pluto';
//shallow copy|| copy by reference
print_r($person);
print_r($newperson);
$newperson=&$person;
$newperson['lname']='Pluto';

print_r($person);
print_r($newperson);
function printData($person){
    $person['fname'].=' change';
    print_r($person);
}
printData($person);
print_r($person);
function printData1(&$person){
    $person['fname'].=' change';
    print_r($person);
}
printData1($person);
print_r($person);
?>