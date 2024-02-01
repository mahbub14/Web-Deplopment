<?php 
session_name("ourapp");
session_start([
    "cookie_domain"=>".main.com",
    "cookie_path"=>"/",

]);
$_SESSION["data2"]="Hello Earth";
echo $_SESSION["data2"];
?>