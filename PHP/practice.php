<?php
class MyException extends Exception{}
class NetWorkException extends Exception{}
function testException(){
  throw new NetWorkException();
}
try{
  testException();
}
catch(MyException $e){
 echo"MyException Caugth\n";
}
catch(NetWorkException $e){
  echo"NetWorkException Caugth\n";
}
finally{
  echo"Cleaned Up\n";
}
?>