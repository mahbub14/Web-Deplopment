<?php
session_start();
//$_SESSION["name"]="Mahbub";
//echo $_SESSION["name"];
//session_destroy();
$_SESSION["counter"]=$_SESSION["counter"]??0;
$_SESSION["counter"]++;
echo $_SESSION["counter"];
?>