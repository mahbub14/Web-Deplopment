<?php
if(isset($_POST['username']) && isset($_POST['password']) &&
isset($_POST['role'])){

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
$username=test_input($_POST['username']);
$password=test_input($_POST['password']);
$role=test_input($_POST['role']);
if(empty($username)){
    header("Location: index.php?error=Username is Required");
       
}
else if(empty($password)){
    header("Location: index.php?error=Password is Required");
}
else{
    echo "Cool! <br>";
}
}
else{
    header("Location: index.php");
}
?>