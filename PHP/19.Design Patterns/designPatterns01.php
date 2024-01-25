<?php
//Design Patterns
//Single ton Patterns
class SomeClass{
    static $instance;
    private $name;
    function __construct($name=null){
        $this->name=$name;
        echo"New Instence Created\n";
    }
    static function getInstance($name=null){
        if(!self::$instance){
            if($name){
            self::$instance=new SomeClass($name);
            }
            else{
                self::$instance=new SomeClass(''); 
            }
        
        }
        else{
       
        echo "Old Instance Suppled\n";
        }
        return self::$instance;
    }
    function sayName(){
        echo $this->name."\n";
    }
   

}
$sc1=SomeClass::getInstance("Rahim");
$sc2=SomeClass::getInstance("Karim");
$sc3=SomeClass::getInstance();
$sc1->sayName();
$sc2->sayName();
$sc3->sayName();
?>