<?php
class MotorCycle{
    private $displacement,$capacity,$mileage;
    function __construct($displacement,$capacity,$mileage){
        $this->displacement=$displacement;
        $this->capacity=$capacity;
        $this->mileage=$mileage;
    }
    function getDisplacement(){
        return $this->displacement;
    }
    function setDisplacement($displacement){
        $this->displacement=$displacement;
    }
    //poperty over loading
    function __get($data){
      echo $this->$data;
    }
}
$pulser=new MotorCycle("150cc","161ltr","460kmp");

//echo $pulser-> getDisplacement();
echo $pulser->displacement;

?>