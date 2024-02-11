const setDisplayValue = (number) => {
    const val=document.getElementById("display").value ;
    if(val){
        document.getElementById("display").value =val+number;
    }
    else{
        document.getElementById("display").value = number;
    }
    
  };
  
  document.getElementById("zero").addEventListener("click", () => {
    setDisplayValue(0);
  });
  
  document.getElementById("one").addEventListener("click", () => {
    setDisplayValue(1);
  });
  
  document.getElementById("two").addEventListener("click", () => {
    setDisplayValue(2);
  });
  
  document.getElementById("three").addEventListener("click", () => {
    setDisplayValue(3);
  });
  
  document.getElementById("four").addEventListener("click", () => {
    setDisplayValue(4);
  });
  
  document.getElementById("five").addEventListener("click", () => {
    setDisplayValue(5);
  });
  
  document.getElementById("six").addEventListener("click", () => {
    setDisplayValue(6);
  });
  
  document.getElementById("seven").addEventListener("click", () => {
    setDisplayValue(7);
  });
  
  document.getElementById("eight").addEventListener("click", () => {
    setDisplayValue(8);
  });
  
  document.getElementById("nine").addEventListener("click", () => {
    setDisplayValue(9);
  });
  document.getElementById("doubleZero").addEventListener("click", () => {
    setDisplayValue('00');
  });
  document.getElementById("plus").addEventListener("click", () => {
    setDisplayValue('+');
  });
  document.getElementById("minus").addEventListener("click", () => {
    setDisplayValue('-');
  });
   document.getElementById("multipy").addEventListener("click", () => {
    setDisplayValue('*');
  }); 
  document.getElementById("divide").addEventListener("click", () => {
    setDisplayValue('/');
  });
   document.getElementById("dot").addEventListener("click", () => {
    setDisplayValue('.');
  });
  document.getElementById("ac").addEventListener("click", () => {
    document.getElementById("display").value =' ';
  });
  document.getElementById("de").addEventListener("click", () => {
    document.getElementById("display").value =document.getElementById("display").value.toString().slice(0,-1);
  }); 
  document.getElementById("equal").addEventListener("click", () => {
    document.getElementById("display").value =eval(document.getElementById("display").value);
  });
  