//map filter

const numbers=[3,4,5,6,7,8];

const output=[];
// for(let i=0;i<numbers.length;i++){
//     const elements=numbers[i];
//     const result=elements*elements;
//     output.push(result);
// }

// numbers.map(function square(element,index,array){
//    console.log(element,index,array);
// });
// const squar=x=>x*x;
// const result=numbers.map(function square(element){
//    return element*element;
// });
const result=numbers.map(x=>x*x);
console.log(result);
const bigger=numbers.filter(x=>x>5);
console.log(bigger);

const isThere=numbers.find(x=>x>3);

console.log(isThere);