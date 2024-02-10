<?php
// Route::get('/',function(){
//     echo"Welcome";
// });
// Route::get('/say/{name}',function($name){
//     echo"Welcome {$name}";
// });
// Route::get('/hello/word','HelloController@sayHelloWorld');

require "Router.php";
use OurApplication\Routing\Router;
use OurApplication\Routing\Route; // Import the Route class

Router::get('/', function() {
    echo "Welcome Home";
});

Router::get('/hello/word', function() {
    echo "Hello Word";
});

Router::cleanup(); // Assuming this is a method provided by the Router class for cleanup operations
?>


?>