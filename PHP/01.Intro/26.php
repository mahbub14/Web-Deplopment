<?php
$default_lat=23.9;
$default_lon=90.8;
$user_lat;
$lat=isset($user_lat)?$user_lat:$default_lat;
echo $lat."\n";
//null coalesce operator 
$lat=$user_lat??$default_lat;
echo $lat."\n";
?>