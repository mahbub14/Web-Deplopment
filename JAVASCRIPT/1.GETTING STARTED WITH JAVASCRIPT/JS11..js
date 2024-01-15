var student={id:121,phone:1745,name:"Abir"};
var student2={id:122,phone:1435,name:"Sakil"};

var phoneNo=student.phone;
console.log(phoneNo);
console.log(student2);
var phoneNo=student["phone"];
console.log(phoneNo);
student.phoneNo=54678;
console.log(student.phoneNo);