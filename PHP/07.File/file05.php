<?php
$filename="C:\\Users\\HP\\Documents\\Web-Devlopment\\PHP\\07.File\\f1.txt";
$students=array(
    array(
        "fname"=>"Shahin",
        "lname"=>"Ahmed",
        "age"=>12,
        "class"=>7,
        "roll"=>11
    ),
    array(
        "fname"=>"Rahim",
        "lname"=>"Ahmed",
        "age"=>12,
        "class"=>17,
        "roll"=>14
    ),
    array(
        "fname"=>"Nikhil",
        "lname"=>"Chandra",
        "age"=>12,
        "class"=>7,
        "roll"=>14

    )
    );
$fp=fopen("f3.txt","w");
foreach($students as $student){
    $data=sprintf("%s,%s,%s,%s,%s\n",$student["fname"],$student["lname"],$student["age"],$student["class"],$student["class"],$student["roll"]);
  fwrite($fp,$data); //csv
}
fclose($fp);

// $fp=fopen("f3.txt","r");
// while($data=fgets($fp)){
//     $student=explode(",",$data);
//     printf("First Name= %s\nLast Name=%s\nAge=%s\nClass=%s\nRoll=%s\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
// }
// fclose($fp);
// $fp=fopen("f3.txt","w");
//  foreach($students as $student){
//     // $data=sprintf("%s,%s,%s,%s,%s\n",$student["fname"],$student["lname"],$student["age"],$student["class"],$student["class"],$student["roll"]);
//    fputcsv($fp,$student); 
//  }
//  fclose($fp);
// $fp=fopen("f3.txt","r");
// while($student=fgetcsv($fp)){
   
//     printf("First Name= %s\nLast Name=%s\nAge=%s\nClass=%s\nRoll=%s\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
// }
// fclose($fp);
// $student=array(
//     "fname"=>"Kamal",
//     "lname"=>"Ahmed",
//     "age"=>13,
//     "class"=>7,
//     "roll"=>17

// );
// $fp=fopen("f3.txt","a");
// fputcsv($fp,$student);
$data=file("f3.txt");
print_r($data);
unset($data[1]);
$fp=fopen("f3.txt","w");
foreach($data as $line){
    if(rtrim($line)!=' ');
    fwrite($fp,$line."\n");
}
fclose($fp);
?>

