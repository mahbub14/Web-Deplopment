<?php 
require_once "vendor/autoload.php";
use Predis\Client;
$redis=new Client();
$redis=new Predis\Client();
$redis->set("product_stock",10);
echo $redis->get("product_stock");
$redis->incr("product_stock");
echo $redis->get("product_stock");
$redis->incrby("product_stock",5);
echo $redis->get("product_stock");
$redis->decr("product_stock");
echo $redis->get("product_stock");
$redis->decrby("product_stock",3);
echo $redis->get("product_stock");
?>