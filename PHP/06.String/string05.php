<?php
//string token
$string="Hello World How are you";
$string2="Quick brown fox jumps over the lazy dog";
$parts=explode(" ",$string);
print_r($parts);
$orjinal=join(" ",$parts);
echo $orjinal."\n";

$orjinal=implode(" ",$parts);
echo $orjinal."\n";
$parts2=str_split($string);
print_r($parts2);
//muliple daimet
$parts3=strtok($string," ,");
while($parts3!=false){
    echo $parts3."\n"; // ittarator
    $parts3=strtok(" ,");
}
$parts4=strtok($string2," ");
while($parts4!=false){
    echo $parts4."\n"; // ittarator
    $parts4=strtok(" ,");
}
// white space \s
$parts5=preg_split("/ |,/",$string);
print_r($parts5);

?>