<?php
require "function.php";
//require "router.php";
//connect to our MYSQL database.
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
$pdo = new PDO($dsn, "root");
$statement = $pdo->prepare("SELECT * FROM `posts`");
$statement->execute(); // Corrected spelling here
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($posts as $post){
    echo "<li>".$post['title']. "</li>";
}
?>