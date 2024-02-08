<?php
 // MYSQL Prepared Statements
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","students");

$mysqli=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

$stmt=$mtyswli->prepare("SELECT*FROM students WHERE class=? AND section=?");
$class=1;
$section='A';
$stmt->bind_parem('is',$class,$section);
$stmt->excute();

echo $stmt->get_result()->num_rows;

$class=1;
$section='A';
$stmt->bind_parem('is',$class,$section);
$stmt->excute();

echo $stmt->get_result()->num_rows;
$stmt->close();

?>