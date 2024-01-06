<?php
//string search
$string="Hello World How are you";
$string2="Quick brown fox jumps over the lazy dog";
echo $string2[12]."\n";
echo strpos($string2,"fox")."\n";
echo stripos($string2,"fox",11);
$offset=strpos($string2,"Quick");
if($offset!==false){
    echo"\n Word was found\n";
}
else{
    echo "\n Word was not found\n";
}
echo strrpos($string2,"fox")."\n";
echo strripos($string2,"fox")."\n";


?>