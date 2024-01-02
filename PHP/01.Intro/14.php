<?php
//switch case
$n=12;
$r=$n%2;
switch($r){
    case 0:
        echo"{$n} is an even number\n";
        break; 
    default:
       echo "{$n} is na odd number\n";
       break;
}
$color="red";
switch($color){
    case "red":
        echo "Red is our favorite color\n";
        break;
    case "green":
        echo"Green is our favorite color\n";
        break;
    case "blue":
        echo "Blue is not our favorite color\n";
        break;
    default:
       echo"This color is ok\n";
       break;
}
switch($color){
    case "red":
    case "green":
        echo"{$color} is our favorite color\n";
        break;
    case "blue":
        echo "Blue is not our favorite color\n";
        break;
    default:
       echo"This color is ok\n";
       break;
}
?>