<?php
//$numbers=array(12,13,14,15,16,17,18,19,20);
$numbers=array();
// for($i=12;$i<=20;$i++){
//     array_push($numbers,$i);
// }
// print_r($numbers);
$numbers=range(12,20);
print_r($numbers);
$numbers=range(12,20,2);
print_r($numbers);
foreach(range(12,20,2) as  $n){
    echo $n."\n";
}
?>