<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM `crud` WHERE id=$id";
$result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="UPDATE `crud` SET `id`=$id,`name`='$name',`email`='$email',`mobile`='$email',`password`='$password' WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
 
    }
}
 
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
     
        <form method="POST">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your name" name="name" autocomplete="off"
                    value="<?= $name; ?>">
               
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your email" name="email" autocomplete="off"
                    value="<?= $email; ?>">
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Your mobile number" name="mobile"
                    autocomplete="off" value="<?= $mobile; ?>">
            </div>
            <div>

                <div>
                    <label>Password</label>
                    <input type="text" class="form-control" placeholder="Enter Your password" name="password"
                        autocomplete="off" value="<?= $password; ?>">
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
       
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>