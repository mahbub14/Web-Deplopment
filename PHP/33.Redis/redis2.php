<?php 
require_once "vendor/autoload.php";
use Predis\Client;
$redis=new Client();
$redis=new Predis\Client();
$car=[
    'name'=>'Sunny',
    'build'=>'2004',
    'company'=>'Nissan'
];
// $redis->hset("car01",'name','sunny');
// $redis->hset("car01",'build','2004');
// $redis->hset("car01",'company','Nissan');
// $redis->hdel('car01','build');
// echo  $redis->hget('car01','build');
$redis->hmset('car01',$car);
print_r($redis->hmget('car01',['name','build']));
print_r($redis->hgetall('car01'));

?>