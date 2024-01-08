<?php
echo date("D/M/Y");
echo "\n";
date_default_timezone_set("Asia/Dhaka");
echo date("ds F, Y h:i:s A");
echo "\n";
echo date("d F, Y h:i:s A");
echo "\n";
echo date("z");
echo "\n";
echo date("ds F, Y h:i:s A",time()+24*60*60);
?>