<?php
include "connect.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `crud` WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo"Delted Successfully";
       header('location:display.php');
    }
}
?>