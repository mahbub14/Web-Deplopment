<?php
include_once 'function.php';
$fruits=['orange','lemon','mango','banna','apple'];
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
            <p>
                <?php
                         $sfruits = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);

                 if(count($sfruits)){
                    echo"You have selected: ".join(", ",$sfruits);
                 }
                ?>
            </p>
           

        </div>

    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST">
                <label for="fruits">Select Some Fruits</label>
                <select name="fruits[]" id="fruits" style="height:200px;" multiple>
                    <option value="" disabled selected>Select Some Fruits</option>
                    <?php selectOption($fruits,$sfruits);?>

					
                </select>

                <button type='submit'>Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>