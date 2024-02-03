<?php
session_name("Myapp");
session_start();
$_SESSION['fname']="Hasan";
echo $_SESSION["fname"];
?>
