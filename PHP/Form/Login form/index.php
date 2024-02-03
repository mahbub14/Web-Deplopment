<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multi-user role-based-login-system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="container d-flex justify-content-center align-items-center"
style="min-height: 100vh;">
<form class="border shadow p-3 rounded"
action="check-login.php"
method="POST" 
style="width: 450px;">
<h1 class="text-center p-3">LOGIN</h1>
<?php if(isset($_GET['error'])):?>
  <div class="alert alert-danger" role="alert">
  <?php echo $_GET['error'];?>
</div>
<?php endif; ?>
  <div class="mb-3">
    <label for="username"
     class="form-label">User name</label>
    <input type="text" 
           class="form-control"
           name="username" 
           id="username" >
  </div>
  <div class="mb-3">
    <label for="password"
     class="form-label">Password</label>
    <input type="password" 
           class="form-control"
           name="password" 
           id="password" >
  </div>
  <div class="mb-0">
    <label class="form-label">Select User Type:</label>
    
  </div>
  <select class="form-select mb-3"
          name="role"
           aria-label="Default select example">
  <option selected value="user">User</option>
  <option value="admin">Admin</option>

   </select>
  <button type="submit" class="btn btn-primary">Login</button>
</form>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>