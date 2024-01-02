<?php
$condition1=true;
$condition2=false;
$condition3=true;
if($condition1){
    if($condition2){
        if($condition3){
            echo"Hello\n";
        }
        else{
            echo"no 1\n";
        }
    }
    else{
        echo"no 2\n";
    }
}
else{
    echo"No 3\n";
}
if($condition1&&$condition2&&$condition3){
    echo"Hello";
}
elseif($condition1&&$condition2){
    echo"no 1\n";
}
elseif($condition1){
    echo"NO 2\n";
}
else{
    echo"No 3\n";
}
?>