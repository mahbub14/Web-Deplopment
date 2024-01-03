<?php
$students=array(
  "rohim",
  "karim",
  123,
  "jamal");
echo $students[0]."\n";
var_dump($students);
$n=count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}
$numbers=[
  2,3,4,5
];
$n=count($numbers);
for($i=0;$i<$n;$i++){
    echo $numbers[$i]."\n";
}
?>