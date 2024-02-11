function evenifly(num){
    if(num%2==0){
        console.log(num, ': is even number');
    }
    else{
        console.log(num*2,': is add number');
    }
}

function evenifly_all(nums){
    for(let i=0;i<nums.length;i++){
        const num=nums[i];
        evenifly(num);
    }
}
nums=[5,12,89,45,18,8];
evenifly_all(nums);
friend_age=[13,17,19,20,18];
evenifly_all(friend_age);