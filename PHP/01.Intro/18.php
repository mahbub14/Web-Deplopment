<?php
for($i=1;$i<20;$i++){
    echo $i."\n";
}
$i=0;
while($i<10){
    $i++;
    echo $i."\n";
}
$i=0;
do{
    $i++;
    echo $i."\n";
}
while($i<10);
$i=0;
a:$i++;
echo $i.PHP_EOL;
if($i<10) goto a;

?>