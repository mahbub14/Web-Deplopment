<?php
class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n){
    self::$name=12;
    self::doSomething();
    echo "Fibonacci series up to {$n}\n";
    }
    static function doSomething(){
        
        echo"Doing Something\n";
    }
    function factorial($n){
        self::doSomething();
        $this->doSomething();
        $this->number=12;
     echo "Calculating factorila of {$n}\n";
    }
}
$mathc=new MathCalculator();
$mathc->factorial(5);
MathCalculator::fibonacci(7);

?>