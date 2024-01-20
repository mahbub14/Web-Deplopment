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
}
$pulser=new MotorCycle("150cc","161ltr","460kmp");

//echo $pulser-> getDisplacement();
echo $pulser->displacement;
if(isset($pulser->tiresize))
echo $pulser->tiresize;
unset($pulser->mileage);
?>