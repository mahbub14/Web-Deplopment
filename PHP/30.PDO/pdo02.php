<?php
//dsn
$pdo=new PDO("mysql:localhost;port:3306;dbname:student;charset=UTF8;'root',''");

if($pdo){
    $stmt=$pdo->query("select * from students where class=1 and section='A'");
    
    //$result=$stmt->fetchAll();
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($result);
}


?>