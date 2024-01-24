<?php
$password="Secret Password";
$hash=password_hash($password,PASSWORD_BCRYPT,['cost'=>12]);
echo $hash."\n";
$userInput="Secret Password";
if(password_verify($userInput,$hash)){
    echo"Authenticated";
}
else{
    echo "Access Denied";
}
?>