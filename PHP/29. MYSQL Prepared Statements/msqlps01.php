<?php
 // MYSQL Prepared Statements
 //SQL injection
$username=$_POST['username']; //"'OR '1'='"
//$newUsername="'OR '1'='";
$newUsername="'UNION DELETE FROM users'";
$query="SELECT*FROM users WHERE user='{$username}' ";
$query="SELECT*FROM users WHERE user='OR '1'='" ;

?>