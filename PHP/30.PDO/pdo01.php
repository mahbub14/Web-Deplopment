<?php
//dsn
$pdo=new PDO("mysql:localhost;port:3306;dbname:student;charset=UTF8;'root',''");

if($pdo){
    $stmt=$pdo->query("select count(*) as N from students where class=1 and section='A'");
    print_r($stmt->fetch(PDO::FETCH_ASSOC));
   $total=($stmt->fetchColumn());
   echo  $total;
}


?>