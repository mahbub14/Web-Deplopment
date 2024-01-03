<?php
$veryond=0;
$old=1;
$new=1;

for($i=0;$i<10;$i++){
    echo $veryond." ";
    $old=$new;
    $new=$old+$veryond;
    $veryond=$old;
}

?>