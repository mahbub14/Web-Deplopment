<?php
//unix epoch
//unix timestemp
echo time();
echo "\n";
var_dump(microtime(false));
echo microtime(true);
$startTime=microtime(true);
factorila(1000);
//sleep(2);
$endTime=microtime(true);
$mt=microtime(true);
printf("%10.18f\n",$mt);

$executionTime=$endTime-$startTime;
printf("%10.8f",$executionTime);
function factorila($n){
    $result=1;
    for($i=1;$i<=$n;$i++){
        $result*=1;
    }
    return $result;
}
?>