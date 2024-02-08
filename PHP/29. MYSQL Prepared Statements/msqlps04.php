<?php
 // MYSQL Prepared Statements
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","students");

$mysqli=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//$stmt=$mtyswli->prepare("SELECT*FROM students WHERE name LIKE '%br%'");
$stmt=$mtyswli->prepare("SELECT*FROM students WHERE name LIKE ?");
$name='%br%';
$stmt->bind_param('s',);
$stmt->excute();
print_r($stmt->get_result()->fetch_all(MYSQLI_NUM));
$stmt->close();

?>