//Random Number
var num=2.49999;

var result=Math.floor(num);
var result2=Math.ceil(num);
var result3=Math.round(num);
//console.log(result);

//console.log(result2);

//console.log(result3);

for(var i=0;i<10;i++){
    var randomNum=Math.random()*6;

    var output=Math.round(randomNum);

    console.log(output);
}
