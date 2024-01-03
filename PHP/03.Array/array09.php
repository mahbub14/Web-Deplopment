<?php
$name=NULL;
if(isset($name)){
    echo"Name is set\n";
}
else{
    echo"Not set\n";
}
echo "\n";
if(empty($name)){
    echo"Name is empty\n";
}
else{
    echo"Not empty\n";
}

if(isset($name)&&(is_numeric($name)||$name!='')){
    echo "Name is set and It's not empty\n";
}
else{
    echo"Name is either not set or it's empty\n";
}
?>