<?php
//delemiter
$vagetables=explode(', ', 'brinjal, brocolli, carrot, capsicam,sweet-potato');
var_dump($vagetables);
echo $vagetables[0];
$vagetablesString=join(', ',$vagetables);
echo $vagetablesString;
$vagetables=preg_split('/(, |,)/', 'brinjal, brocolli, carrot, capsicam,sweet-potato');
var_dump($vagetables);
print_r($vagetables);
?>