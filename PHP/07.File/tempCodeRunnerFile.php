<?php
$fp=fopen("f3.txt","w");
foreach($students as $student){
    $data=sprintf("%s,%s,%s,%s,%s\n",$student["fname"],$student["lname"],$student["age"],$student["class"],$student["class"],$student["roll"]);
  fwrite($fp,$data); csv
}
fclose($fp);