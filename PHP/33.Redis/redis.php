<?php 
require_once "vendor/autoload.php";
use Predis\Client;
$redis=new Client();
$redis=new Predis\Client();
$redis->set("key",10);
echo $redis->get("key");
?>