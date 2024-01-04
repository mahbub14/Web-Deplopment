<?php
$fruits=array("a"=>"apple","b"=>"banna","f"=>"orange","g"=>"plum","h"=>"dates","i"=>"mange");
$numbers=array(1,11,2,22,"56",3,2,4,22,77,5);
//search in simple way
if(in_array(56,$numbers)){
    echo "56 is found\n";
}
// search with data type 
if(in_array(56,$numbers,true)){
    echo "56 is found\n";
}
//search index
$offset=array_search(56,$numbers);
//$offset=array_search(56,$numbers,true);// with type
echo $offset."\n";
// key search
if(key_exists("b",$fruits)){
    echo"Key b exists\n";
}
?>