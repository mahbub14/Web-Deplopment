<?php
$n=12;
if($n%2==0){
    echo"Even number\n";
}
else{
    echo "Odd Number\n";
}

if($n%2==0):
    echo"Even Number";
    echo"\n";
    echo PHP_EOL;
    echo "some text";
else:
    echo "Odd Number\n";
endif;
echo PHP_EOL;
switch($n%2==0):
    case 0:
    echo "Even Number\n";
    break;
    default:
    echo "Odd Number\n";
    
endswitch;

?>