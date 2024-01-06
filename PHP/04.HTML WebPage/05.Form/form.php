<?php
header( 'X-XSS-Protection:0' );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Our First Form</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid magnam fugiat doloribus officia. Vero
                illum debitis ipsam necessitatibus eaque sed.</p>
                <p>
                    <?php
                    $fname="";
                    $lname="";
                    ?>
                    <?php if(isset($_REQUEST["fname"])&&!empty($_REQUEST["fname"])):?>
                     <?php $fname=htmlspecialchars($_REQUEST["fname"])?>
                    <?php endif?>
                    <?php if(isset($_REQUEST["lname"])&&!empty($_REQUEST["lname"])):?>
                    <?php $lname=htmlspecialchars($_REQUEST["lname"])?>
                    <?php endif?>
                </p>
                <p>
                    First Name:<?php echo $fname;?><br>
                    Last Name:<?php echo $lname;?><br>
                </p>
                          
        </div>

    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="GET">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fname;?>">

                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname;?>">


                <button type='submit'>Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>