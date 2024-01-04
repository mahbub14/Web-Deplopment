<?php
$numbers=range(33,72);
$random=mt_rand(0,32);
echo $random."\n";
echo $numbers[$random]."\n";
$luck=$numbers[$random];
if($luck%2==0){
    echo"Head\n";
}
else{
    echo"Tail\n";
}
shuffle($numbers);
print_r($numbers);
?>