//Sum of all element in an array

function getArraySum(numbers){
    var sum=0;
    for(var i=0;i<numbers.length;i++){
        var element=numbers[i];
        sum+=element;
    }
    return sum;
}
var numbers=[45,81,63,98,56,35,23];
var result=getArraySum(numbers);
console.log("Sum of array element:",result);
var totat=getArraySum([25,24,23,2,72,5]);
console.log("Sum of array element:",totat);

