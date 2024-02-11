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
   <h1>Recommended Books</h1>
   <?php
   $books=[
   [
   'name'=>'Do Androids Dream og Electic Sheep',
   'author'=>'Phil K.Dish',
   'relaseYear'=>2011,
   'puschaseUrl'=>'http://example.com'

   ],
   [
    'name'=>'The Martain',
    'author'=>'Andy Weir',
    'relaseYear'=>2011,
    'puschaseUrl'=>'http://example.com'
 
    ]
   ];
   function filterByAuthor($books){
    $filteredBooks=[];
    foreach($books as $book){
        if($book['author']==='Andy Weir'){
            $filteredBooks[]=$book;
        }
    }
    return $filteredBooks;
   }
   ?>
   <ul>
   
   <?php 
 
     foreach(filterByAuthor($books) as $book): ?>
     <li><a href="<?=$book['purchaseUrl']?>">
     <?= $book['name'];?> (<?=$book['relaseYear']?>)
    </a>
    </li>
     <?php endforeach;?>
   </ul>
</body>
</html>