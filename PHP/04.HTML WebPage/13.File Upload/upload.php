

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
            <h2>File Upload</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid magnam fugiat doloribus officia. Vero
                illum debitis ipsam necessitatibus eaque sed.</p>
        <pre>
           <P>
           <?php
            print_r($_POST);
            print_r($_FILES);
           ?>
           </P>
        </pre>
        </div>

    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST" enctype="multipart/form-data">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname">

                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname">

                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo"><br/>
               

                <button type='submit' name="submit" value="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>