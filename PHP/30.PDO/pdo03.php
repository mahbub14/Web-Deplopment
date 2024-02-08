<?php
//dsn
$pdo=new PDO("mysql:localhost;port:3306;dbname:student;charset=UTF8;'root',''");
$pdo->setAttribute(PDO::ATRT_DEFAULT_MODE,PDO::FETCH_ASSSOC);
$stmt=$pdo->prepare("SELECT*FROM students WHERE class=? AND section=? ");
$class=1;
$sectioin='A';
$stmt->bindParam(1,$class,PDO::PARAM_INT);
$stmt->bindParam(2,$section,PDO::PARAM_STR);
$stmp->execute();

print_r($stmt->fetchAll());
// $stmt->execute(1,'A');

// print_r($stmt->fetchAll());

// $stmt->execute(1,'B');

// print_r($stmt->fetchAll());


?>