<?php
$to="mahbubhasan14@gmail.com";
$from="mahbubhasan14@gmail.com";
$subject="How is life";
$body="Hello\n How are you?";
$header="From {$from}\r\n";
mail($to,$subject,$body,$header);

?>