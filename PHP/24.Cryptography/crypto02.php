<?php
//Hashing
$password="Secret Password";
$hash=md5($password);
echo $hash."\n";
$userInput="Users Password";
if(md5($userInput)=="df02c6d2cc237b4ae8ab2aa04802ea76"){
    echo"Password Correct\n";
}
else{
    echo"Password Incorrect\n";
}
?>