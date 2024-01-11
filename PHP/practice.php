<?php
class Animal{
    protected $name;
    public function __construct($name){
        $this->name=$name;
        }
    public function eat(){
        echo"{$this->name} is eating\n";
    }
    public function run(){
        echo"{$this->name} is running\n";
    }
    public function sleep(){
        echo"{$this->name} is sleeping\n";
    }
    protected function addTittle($title){
        $this->name=$title." ".$this->name;
    }
}
class Human extends Animal{

}
class Cat extends Animal{

}
$h1=new Human("Mahbub");
$h1->eat();
$h1->run();
$c1=new Cat("M");
$c1->run();

?>