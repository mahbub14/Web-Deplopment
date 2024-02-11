//class constructor object
class Student{
    constructor(sId,sName){
        this.id=sId;
        this.name=sName;
        this.school="Koliimunnesa school";
    }
}

const student1=new Student(12,"Shuvo");
const student2=new Student(22,"Mahiya");

console.log(student1,student2);