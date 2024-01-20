<?php
class Student{
    private $name,$age,$Class;
    function __construct($name='',$age='',$Class=''){
        $this->name=$name;
        $this->age=$age;
        $this->Class=$Class;
    }
    function __get($prop){
        return $this->$prop;
    }
    function __set($prop,$value){
        $this->$prop=$value;
    }
}
$m=new Student("Kamal\n","12",3);
echo $m->name;
$m->age="25\n";
echo $m->age;
?>