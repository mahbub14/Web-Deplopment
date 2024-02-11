//array slice splice join
const nums=[1,2,3,4,5,6,7,8];
const part=nums.slice(2,5);

console.log(part);
const remove=nums.splice(2,3);

console.log(remove);

console.log(nums);
const together=nums.join(",");
console.log(together);
