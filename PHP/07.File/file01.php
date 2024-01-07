<?php
$filename="C:\Users\HP\Documents\Web-Devlopment\PHP\07.File\f1.txt";
//current directory
//echo getcwd();
if(is_readable("f1.txt")){
$fp=fopen("f1.txt","r");
$line=fgets($fp);
echo $line."\n";
while($line=fgets($fp)){
    echo $line;
}}
echo "\n";
//rewind($fp);
fseek($fp,-1,SEEK_END);
while($line=fgets($fp,5)){
    echo $line."-";
}

fclose($fp);
$data=file("f1.txt");
print_r($data);
$data=file_get_contents("f1.txt");
echo $data."\n";
?>