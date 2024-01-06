<?php
//string reverse
$string="Hello World";
$lenght=strlen($string)-1;

for($i=$lenght;$i>=0;$i--){
    echo $string[$i];
}
echo PHP_EOL;

$lenght=strlen($string);

for($i=1;$i<=$lenght;$i++){
    echo $string[$i*-1];
}
echo PHP_EOL;
echo strrev($string);

?>