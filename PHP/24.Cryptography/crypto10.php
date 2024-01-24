<?php 
//ssh-keygen -t rsa -f /Users/hasinhayder/Dump/lwhh-php/hash-crypt/keys/id_rsa
require __DIR__ . '/vendor/autoload.php';

use phpseclib\Crypt\RSA;

$rsa = new RSA();
$rsa->loadKey(file_get_contents("./keys/id_rsa.pub")); // public key

$plaintext = 'Secret Message';

//$rsa->setEncryptionMode(RSA::ENCRYPTION_OAEP);
$ciphertext = $rsa->encrypt($plaintext);
echo bin2hex($ciphertext)."\n";

$rsa->loadKey(file_get_contents("./keys/id_rsa")); // private key
echo $rsa->decrypt($ciphertext);
?>