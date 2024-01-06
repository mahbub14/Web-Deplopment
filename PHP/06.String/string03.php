<?php
//string char access
$string="Hello World";
echo $string[0]."\n";
echo $string[-1]."\n";

echo substr($string,1,4)."\n";
$length=strlen($string);
echo substr($string,$length-3)."\n";
echo substr($string, -3)."\n";
echo substr($string, -3,-1)."\n";


?>