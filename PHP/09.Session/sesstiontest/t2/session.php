<?php
session_name("ourapp");
session_start([
    "cookie_domain"=>".main.com",
    "cookie_path"=>"/",

]);
$_SESSION["data"]="Hello Word";
echo $_SESSION["data"];
 ?>