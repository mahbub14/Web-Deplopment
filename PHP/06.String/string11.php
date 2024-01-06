<?php
// line break to br
$string="Quick brown fox jumps over the lazy dog";
$name="Abul hossain 01740267189";
$parts=sscanf($name, "%s %s %11s");
print_r($parts);
sscanf($name,"%s %s %11s",$fname,$lname,$mobile);

echo $mobile."\n";
$hexcolor="#FF2F44";
sscanf($hexcolor,"#%2x%2x%2x",$red,$green,$blue);
echo $red."\n";

?>