<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items:center;
            height:100vh;
            font-family:sans-serif;
        }
    </style>
</head>
<body>
    <?php
    $book="Dark Matter";
    $read=true;
    if($read){
        $message="You Have read $book";
    }
    else{
        $message="You Have NOT read $name";
    }
    ?>
    <h1 ><?= $message ?>  </h1>
</body>
</html>