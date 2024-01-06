<?php

//$string="Quick brown fox jumps over the lazy dog";
// trim ltrim rtrim
$string=" hello\n";
echo $string."\n";
echo "Data\n";
$string=trim($string);
echo $string."\n";
$string=trim($string, ' ');
echo $string;

?>