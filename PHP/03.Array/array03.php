<?php

$students=[
    '12'=>'hasan',
    '13'=>'karim',
    '20'=>'habib'
];
echo $students["12"]."\n";

$foods=[
    'vagitables'=>'brinjalm brocolim carrotm capsicam',
    'fruits'=>'orange, banana, apple',
    'drink'=>'water, milk'
];
echo $foods['vagitables']."\n";
$n=count($foods);
foreach($foods as $key=>$value){
    echo $key."=".$value."\n";
}
$foods['drink']=$foods['drink'].",orange juice";
$foods['drink'].=",orange juice";

$keys=array_keys($foods);
print_r($keys);
$values=array_values($foods);
print_r($values);
for($i=0;$i<count($keys);$i++){
    
    echo $foods[$keys[$i]]."\n";
}
for($i=0;$i<count($values);$i++){
    
    echo $values[$i]."\n";
}
?>