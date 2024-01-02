<?php
//variable mane chage kora jay
$task="Read";
echo $task;
echo"\n";
$task="Write";
echo $task;
echo"\n";
//output niye details
/*
Integer int
Double/ Float
Boolen
NULL
String
Array
Object
Resource
*/
$result=true;
var_dump($result);
$name="Earth";
echo "We're living on {$name}\n";
$name=strtoupper($name);
echo "We're living on {$name}\n";

printf("We are living on %s\n",$name);
$fname="Isaac";
$lname="Newton";
printf("His name is %s %s\n",$fname,$lname);
$planet1="Mercury";
$planet2="Jupiter";
echo "The smallest planet is".$planet1."and the biggest planet is ".$planet2."\n";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}\n";
printf("The smallest planet is %s and the biggest planet is %s\n",$planet1,$planet2);
?>