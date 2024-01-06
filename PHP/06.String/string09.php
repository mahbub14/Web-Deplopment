<?php
$string="Quick brown fox jumps over the lazy dog";
echo wordwrap($string)."\n";
echo wordwrap($string,3)."\n";
echo wordwrap($string,326,"\n",true)."\n";

?>