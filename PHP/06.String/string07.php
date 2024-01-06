<?php
//string search and replace
$string="Quick brown fox jumps over the lazy dog";
$relacedString=str_replace("brown","Brown",$string,$count);
echo $relacedString."\n";
echo $string."\n";

echo"Total replacement: ".$count."\n";
$relacedString=str_ireplace("brown","Brown",$string,$count);
echo $relacedString."\n";
$relacedString1=str_replace(array("brown","fox"),array("red","cat"),$string,$count);
echo $relacedString1."\n";


$relacedString1=str_replace(array("brown","fox"),"word",$string,$count);
echo $relacedString1."\n";

?>