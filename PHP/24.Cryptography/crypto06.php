<?php
//Crypt
$message="This is a secret message";
$key="MySecretPassword";
//$blowfish_slat="$2y$10$".bin2hex(random_bytes(11));
$blowfish_slat="$2y$10$".bin2hex(openssl_random_pseudo_bytes(11));

//echo $blowfish_slat;
echo crypt($message,$blowfish_slat);
?>