<?php
$student=[
  'fname'=>'Mahbub',
  'lname'=>'Hasan',
  'phone'=>'0186923430'
];
foreach($student as $key=>$value){
  echo $key." = ".$value."\n";
}
echo count($student);