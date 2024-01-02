<?php
//switch case
$n=13;
$r=$n%2;
switch($r){
    case 0:
        switch($n){
            case $n>0:
                echo "$n is a positive even number\n";
                break;
            case $n<0:
                echo "$n is a negativee even number\n";
                break;
        }
        break;
    default:
    case $n>0:
        echo "$n is a positive odd number\n";
        break;
    case $n<0:
        echo "$n is a negativee odd number\n";
        break;

}
switch(true){
    case($r==0&&$n>0):
        echo "$n is a positive even number\n";
        break;
    case($r==0&&$n<0):
        echo "$n is a negative even number\n";
        break;
    case($r==1&&$n>0):
        echo "$n is a positive odd number\n";
        break;
    default:
       echo"$n is a negative number\n";
       break;
}
?>