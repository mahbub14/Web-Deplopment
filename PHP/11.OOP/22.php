<?php
class Color{
    function __construct($color){
        $this->color=$color;
    }
    function setColor($color){
        $this->color=$color;

    }
    function __toString(){
       return "The color is {$this->color}\n";
    }
}
$c=new Color("Red");
//echo serialize($c);
echo $c;

?>