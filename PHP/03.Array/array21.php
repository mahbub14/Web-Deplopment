<?php
$fruits=array("a"=>"Apple","b"=>"Banna","c"=>"Cherry","d"=>"Dates");
// shuffle($fruits);
// print_r($fruits);
// $key=array_rand($fruits);
// echo $fruits[$key]."\n";
$_fruits=$fruits;
shuffle($_fruits);
$key=array_rand($fruits);
echo $fruits[$key];
print_r($_fruits);
?>