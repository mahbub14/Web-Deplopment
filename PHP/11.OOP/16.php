<?php
class Myclass{
    const CITY="Dhaka";
    function sayHi(){
        echo "Hi Form ".self::CITY;
        //echo "Hi Form".$this::CITY;
    }
}
$m=new Myclass();
$m->sayHi();
//echo Myclass::CITY;
?>