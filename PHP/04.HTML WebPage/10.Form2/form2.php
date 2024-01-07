<?php
include_once "form2-functions.php";
$fruits = [ "mango", "orange", "Banana", "apple", "lemon", "peach" ];
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
            <h2>Select/Dropdowns</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid magnam fugiat doloribus officia. Vero
                illum debitis ipsam necessitatibus eaque sed.</p>

           

        </div>

    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST">
                <label for="fruits">Select Some Fruits</label>
                <select name="fruits" id="fruits">
                    <option value="" disabled selected>Select Some Fruits</option>
                    <option value="mange">Mango</option>
                    <option value="orange">Orange</option>

				<?php displayOptions($fruits);?>	
                </select>

                <button type='submit'>Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>