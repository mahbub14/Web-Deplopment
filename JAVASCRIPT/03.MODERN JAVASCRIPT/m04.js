// function doubleIt(num){
//     return num*2;
// }
// const  doubleIt=function(num){
//     return num*2;
// }
// const  doubleIt=function myFun(num){
//     return num*2;
// }
const doubleIt=(num)=> num*2;
const result=doubleIt(5);
console.log(result);
const add=(x,y)=> x+y;
const res=add(50,70);
console.log(res);
const give5=()=>5;
console.log(give5());
const doMath=(x,y)=>{
    const sum=x+y;
    const dif=x-y;
    const result=sum*dif;
    return result;
}
console.log(doMath(7,5));