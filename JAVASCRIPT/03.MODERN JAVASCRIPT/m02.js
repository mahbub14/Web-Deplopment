function add1(num1,num2){
    if(num2==undefined){
        num2=0;
    }
    return num1+num2;
}
function add2(num1,num2){
    num2=num2||0;
    return num1+num2;
}
function add(num1,num2=0){
    return num1+num2;
}
const total=add(15,17);

console.log(total); 