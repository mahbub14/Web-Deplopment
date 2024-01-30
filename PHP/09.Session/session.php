<?php
// session_start();
session_name("myapp");
    session_start([
        'cookie_lifetime'=>60
    ]);
$_SESSION['name']="mahbub";
echo $_SESSION['name'];

?>