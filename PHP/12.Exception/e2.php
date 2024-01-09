<?php
class MyException extends Exception{}
class NetworkException extends Exception{}
function testException(){
    throw new NetworkException();
}
try{
    testException();
}catch(MyException $e){
    echo "MyException Caugth\n";
}catch(NetworkException $e){
    echo "NetworkException Caugth\n";
}catch(Exception $e){
    echo"Exception Caught";
}
finally{
    echo "Cleaned Up\n";
}
?>