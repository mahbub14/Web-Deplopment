<?php 
require_once "vendor/autoload.php";
use Predis\Client;
$redis=new Client();
$redis=new Predis\Client();
$redis->rpush('chatroom','Jonny: Hello Guys');
echo $redis->llen('chatroom');
print_r($redis->lrange('chatroom',0,2));
?>