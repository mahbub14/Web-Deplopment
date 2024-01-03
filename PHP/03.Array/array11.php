<?php
$fruits=array("apple","banna","orange","plum","dates","mange");
$ramdom=[
    "a"=>12,
    "b"=>13,
    "c"=>31,
    "d"=>45,
    12=>24,
    "e"=>25,
    "f"=>78
];
//$someFruits=array_splice($fruits,2,2);
$newFruits=array("jackfruit","tamarind");
$someFruits=array_splice($fruits,-5,2,$newFruits);
print_r($someFruits);
print_r($fruits);

?>