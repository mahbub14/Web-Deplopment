<?php
class Animal{
    protected $name;
    function __construct($name=" "){
        $this->name=$name;
    }
    function eat(){
        echo"{$this->name} is eating\n";
    }
    function run(){
        echo"{$this->name} is runnig\n";
    }
    function sleep(){
        echo"{$this->name} is sleeping\n";
    }
    function greet(){


    }
    protected function addTitle($titile){
    $this->name=$titile." ".$this->name;
    }
}
class Human extends Animal{
   function greet(){
    $this->addTitle("Mr");
    echo"{$this->name} say Hi\n";
   }
}
class Cat extends Animal{
    function greet(){
        echo "{$this->name} say MOow\n";
    }
}
$h1=new Human("Rasel");
$h1->greet();
?>