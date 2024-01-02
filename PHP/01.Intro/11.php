<?php
$n=2024;
if($n%4==0&&($n%100!=0||$n%400==0)){
    echo"This is leap Year\n";
}
else{
    echo"This is not leap Year\n";
}
?>