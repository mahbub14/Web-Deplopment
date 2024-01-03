<?php
//delemiter
//string to array explode
$vagetables=explode(', ', 'brinjal, brocolli, carrot, capsicam,sweet-potato');
var_dump($vagetables);
echo $vagetables[0];
//array to sting join
$vagetablesString=join(', ',$vagetables);
echo $vagetablesString;
//string to array where preg_split accept multiple deleniter acceptable
$vagetables=preg_split('/(, |,)/', 'brinjal, brocolli, carrot, capsicam,sweet-potato');
var_dump($vagetables);
print_r($vagetables);
?>