<?php
//magic method
class Student{
    private $name;
    private $age;
    private $class;
    function __construct($name=' ',$age=' ', $class=' '){
        $this->name=$name;
        $this->age=$age;
        $this->class=$class;
    }
    public function __get($prop){
        return $this->$prop;
    }
    public function __set($prop,$value){
       $this->$prop=$value;
    }
    // function getName(){
    //     return $this->name;
    // }
    // function setName($name){
    //     $this->name=$name;
    // }
    // function setAge($age){
    //     $this->age=$age;
    // }
    // function getAge(){
    //     return $this->Age;
    // }
    // function setClass($class){
    //     $this->class=$class;
    // }
    // function getClass(){
    //     return $this->class;
    // }
}
//$r=new Student("Rahim","18","10");
//$r=new Student("Rahim");
$r=new Student("Rahim","18","10");
echo $r->name;
$r->name="kamal";
echo $r->name;
?>