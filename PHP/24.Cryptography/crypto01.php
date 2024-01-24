<?php
//Hashing
echo md5("Let there be light");
echo"\n";
echo md5("Let there be lights");
echo "\n";
echo sha1("Let there be lights");
echo "\n";
//print_r(hash_algos());
echo hash("md5","Let there be lights");
echo"\n";
echo bin2hex(mhash(MHASH_SHA512,"Let there be Ligth"));
?>