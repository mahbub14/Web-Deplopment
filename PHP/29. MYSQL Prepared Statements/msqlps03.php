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

$result= $stmt->get_result();
// while($data=$result->fetch_assoc()){
//     print_r($data);
// }
$data=$result->fetch_all(MYSQLI_ASSOC);
print_r($data);
$stmt->close();

?>