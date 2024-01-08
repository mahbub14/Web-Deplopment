<?php
abstract class OurClass{
    function sayHi(){
        echo "Hi\n";
    }
  abstract function eat($v1,$v2=0);
}
class MyClass extends OurClass{
    function eat($v1,$v2=5){
      echo "I am eating\n";
    }
}
$mc=new myClass();
$mc->sayHi();
$mc->eat(1,2);

?>