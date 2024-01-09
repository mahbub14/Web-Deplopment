<?php
class A{
   static function sayHi(){
        echo "Hi Form A\n";
    }
}
class B extends A{
    static function sayHi(){
        echo "Hi Form B\n";
        parent::sayHi();
    }
}
B::sayHi();
?>