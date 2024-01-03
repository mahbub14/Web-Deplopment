<?php
$students=array(
   'fname'=>'Jamal',
   'lname'=>'Ahmed',
   'age'=>'15',
   'class'=>8,
   'section'=>'B'
);
print_r($students);
echo $students['fname']." ".$students['lname']."\n";
printf("%s %s\n",$students['fname'],$students['lname']);
echo join(",",$students);
$serialized =serialize($students);
echo $serialized; 
$newstudents=unserialize($serialized);
print_r($newstudents);
$jesondata=json_encode($students);
echo $jesondata."\n";
$newstudent2=json_decode($jesondata,true);
print_r($newstudent2);

?>