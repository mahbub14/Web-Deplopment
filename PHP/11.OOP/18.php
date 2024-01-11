<?php
class DistrictCollection implements IteratorAggregate{
    private $districts;
    function __construct(){
        $this->districts=array();
    }
    function add($district){
        array_push($this->districts,$district);
    }
    function getDistricts(){
        return $this->districts;
    }
    function getIterator(){
        return new ArrayIterator($this->districts);
    }
}
$districts=new DistrictCollection;
$districts->add("Rajshahi");
$districts->add("Bogra");
$districts->add("Sylhet");
//$_districts=$districts->getDistricts();
//print_r($_districts);
foreach($districts as $_district){
    echo $_district."\n";
}
?>