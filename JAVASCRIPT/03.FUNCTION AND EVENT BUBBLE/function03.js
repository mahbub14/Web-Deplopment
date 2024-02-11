function explain_callback(name,age,task){
    console.log('Hello',name);
    console.log('Your age',age);
    task();
}
function washHand(){
    console.log('Wash hand with soap');
}
function taskShower(){
    console.log('Take shower');
}
explain_callback("Sogir Uddin",17,washHand);

explain_callback("Kobir Uddin",17,taskShower);