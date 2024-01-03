<?php
//mutable 
$students=array("rohim","karim","jamal");
$n=count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}
echo"\n";
$s=array_pop($students);
$n=count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}
echo"\n";
$s=array_shift($students);
$n=count($students);
$n=count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}
echo"\n";
$students[]="mahbub";
$n=count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}
echo"\n";
array_push($students,"mehedi");
$n=count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}
echo"\n";
array_unshift($students,"first");
$n=count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}
echo"\n";
?>