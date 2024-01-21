<?php
class MotorCycle{
    private $parameter;
    function __construct($displacement,$capacity,$mileage){
        $this->parameter=[];
        $this->parameter['displacement']=$displacement;
        $this->parameter['capacity']=$capacity;
        $this->parameter['mileage']=$mileage;
    }
    function getDisplacement(){
        return $this->parameter['displacement'];
    }
    function setDisplacement($displacement){
        $this->parameter['displacement']=$displacement;
    }
    //poperty over loading
    function __get($data){
      echo $this->parameter[$data];
    }
    function __set($prop,$value){
       echo  $this->parameter[$prop]=$value;
    }
    function __isset($name){
        if(!isset($this->parameters[$name])){
            echo "{$name} not found\n";
            return false;
        }
        return true;
    }
    function __unset($name){
        print_r($this->parameter);
      unset($this->parameters[$name]);
        print_r($this->parameter);
    }
    //method overloading
    function __call($name,$argument){
        if('run'==$name){
            if($argument){
            echo"I am runnig at {$argument[0]}\n";
            }
            else{
                echo"I am runnig\n";
            }
        }
    }
   static function __callStatic($name, $argument){
        echo"Static Call\n";
    }
}
MotorCycle::wash();
$pulser=new MotorCycle("150cc","161ltr","460kmp");

//echo $pulser-> getDisplacement();
echo $pulser->displacement;
if(isset($pulser->tiresize))
echo $pulser->tiresize;
unset($pulser->mileage);
$pulser->run('100kmp');
?>