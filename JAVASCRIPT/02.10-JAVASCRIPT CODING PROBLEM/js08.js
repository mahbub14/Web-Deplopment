//reverse a string
function reverseString(str){
    var reverse="";
    for(var i=0;i<str.lenght;i++){
        var char=str[i];
        reverse=char+reverse;
    }
   
    return reverse;
}
var statement="Hello Alien bhai brother.";

var forAlien=reverseString(statement);

console.log(forAlien);