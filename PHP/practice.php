<?php
$fruits=array("a"=>"Apple","b"=>"Banna","c"=>"Cherry","d"=>"Dates");
$_fruits=$fruits;
shuffle($_fruits);
$key=array_rand($fruits);
echo $fruits[$key]."\n";
print_r($_fruits);
?>
