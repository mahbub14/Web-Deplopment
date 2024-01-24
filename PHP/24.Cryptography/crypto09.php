<?php
//openssl genrsa -des3 -out private.pem 4096
//openssl rsa -in private.pem -out public.pem -outform PEM -pubout
$public_key = openssl_get_publickey(file_get_contents("/Users/hasinhayder/Dump/lwhh-php/hash-crypt/keys/public.pem"));
$private_key = openssl_get_privatekey(file_get_contents("/Users/hasinhayder/Dump/lwhh-php/hash-crypt/keys/private.pem"),"hello");
$message = "Secret Message";
openssl_public_encrypt($message,$secret_message,$public_key);
echo bin2hex($secret_message);

openssl_private_decrypt($secret_message,$decrypted,$private_key);
echo $decrypted;
?>