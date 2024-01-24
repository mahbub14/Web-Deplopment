<?php
//Hashing
$secrecPassword="WOW";
$message="This is NOT a secret message";
$hash=mhash(MHASH_SHA512,$message.$secrecPassword);
echo bin2hex($hash);
?>