<?php
//tarnary operator
 $n=12;
 if(12==$n){
    echo"Twelve\n";
 }
 else if(10==$n){
    echo"Ten\n";
 }
 else{
    echo"A number\n";
 }
 $numberInWord=(12==$n)?"Twelve":"A number";
 echo $numberInWord,"\n";
 $n=12;
 $m=($n%2==0)?"even":"Odd";
 echo $m,"\n";
?>