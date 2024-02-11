function evenifly(num){
    if(num%2==0){
        return num;
    }
    else{
        return num*2;
    }
}

var result=evenifly(13);
console.log('Result',result);
var square=result*result;
console.log("Square",square);

function evenifly_all(nums){
    var even_array=[];
    for(let i=0;i<nums.length;i++){
        const num=nums[i];
        var result=evenifly(num);
        even_array.push(result);
    }
    return even_array;
}
var nums=[5,12,89,45,18,8];
var num_even=evenifly_all(nums);
console.log(num_even);
friend_age=[13,17,19,20,18];
//evenifly_all(friend_age);