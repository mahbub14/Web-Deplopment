<?php
 // MYSQL Prepared Statements
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","students");

$mysqli=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

$stmt=$mtyswli->prepare("SELECT*FROM students class=? AND IN(?,?)");
$class=1;
$section1='A';
$section2='B';
$stmt->bind_param('iss',$class,$section1,$section2);
$stmt->excute();
print_r($stmt->get_result()->num_rows);

$stmt->close();

?>