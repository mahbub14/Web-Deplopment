<?php
class Human{
    public $name;
    public $age;
    public function __construct($personName,$personAge=0){
        //echo "New Human Object is Created\n";
        $this->name=$personName;
        $this->age=$personAge;
    }
    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }
    function sayName(){
   if($this->age){
    echo "My Name is {$this->name}, I am {$this->age} years old\n";
   }
   else{
    echo "My Name is {$this->name}, I don't know how old I am\n";
   }
    }
}
$h1= new Human("Rubel",21);
$h2=new Human("mahbub",25);
$h3=new Human("Hasan");
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();
?>