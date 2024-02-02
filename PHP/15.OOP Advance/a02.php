<?php
//Depandency Injection IOC=inversion of contro;
interface BaseStudent{
    function displayName();
}
class ImproveStudent implements BaseStudent{
    private $name;
    private $title;
    function __construct($name,$title){
     $this->name=$name;
     $this->title=$title;
    }
    function displayName(){
        echo "Hello Form {$this->title}.{$this->name} ";
       }
}

class Student implements BaseStudent{
    private $name;
    function __construct($name){
     $this->name=$name;
    }
    function displayName(){
     echo "Hello Form ".$this->name;
    }
}
// Hard Depandency Creat Hoyse tritly couple
// class StudentManager{
//     function introduceStudent($name){
//      $st=new Student($name);
//      $st->displayName();
//     }
// }
//losely couple
class StudentManager{
    function introduceStudent(BaseStudent $student){
     $student->displayName();
    }
}
//object creat kore arekta class er function e argument hisabe pass kore hole depadence injection 
$st=new Student("John Doe");
$ist=new ImproveStudent("John Doe","Mr");
$sm=new StudentManager();
$sm->introduceStudent($st);
echo "\n";
$sm->introduceStudent($ist);
?>