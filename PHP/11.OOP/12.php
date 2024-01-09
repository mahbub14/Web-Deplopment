<?php
interface BaseAnimal{
    function isAlive();
    function canEat($param1,$param2);
    function breed();
}
class Animal implements BaseAnimal{
    function isAlive(){}
    function canEat($param1,$param2){}
    function breed(){}
}
interface BaseHuman extends BaseAnimal{
    function canTalk();
}
class Human implements BaseHuman{
    function isAlive(){}
    function canEat($param1,$param2){}
    function breed(){}
    function canTalk(){}
}
abstract Class AbstractHuman implements BaseHuman{
    abstract public function run();
    function eat(){
        echo "I am eat\n";
    }
}
class Human implements AbstractHuman{
    function isAlive(){}
    function canEat($param1,$param2){}
    function breed(){}
    function canTalk(){}
}
$h=new Human();
echo $h instanceof BaseHuman;
echo $h instanceof BaseAnimal;

$cat=new Animal();
echo $cat instanceof BaseHuman;
?>