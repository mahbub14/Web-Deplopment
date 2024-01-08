<?php
abstract class OurClass{
    final function doSomething(){
        echo "Doing Something\n";
     }
}
class Myclass extends OurClass{
    
}
$mc=new MyClass();
$mc->doSomething();

?>