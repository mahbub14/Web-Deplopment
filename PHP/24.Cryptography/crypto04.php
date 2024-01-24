<?php
//Timing Attack
if("apple"==$_POST['data']){
    echo"Matched";
}
$password="Sectec Password";
$hash=hash("sha1",$password);
echo $hash."\n";
$userInputHash=hash("sha1",$_POST['password']);
if($hash==$userInputHash){
  echo"Password Matched";   
}
if(hash_equals($hash,$userInputHash)){
    echo"Password Matched";
}
?>