<?php
$x=7;
$y=5;
function greaterOrSmall($x,$y){
    if($x>$y){
        return 1;
    }
    else if($x==$y){
        return 0;
    }
    else{
        return -1;
    }
}
if(greaterOrSmall($x,$y)==1){
    echo"{$x} is greater than {$y}\n";
}else if(greaterOrSmall($x,$y)==0){
    echo"{$x} is equal than {$y}\n";
}
else{
    echo"{$x} is smaller than {$y}\n";
}
//spaceship operator
$result=$x<=>$y;
if($result==1){
    echo"{$x} is greater than {$y}\n";
}else if($result==0){
    echo"{$x} is equal than {$y}\n";
}
else{
    echo"{$x} is smaller than {$y}\n";
}
?>