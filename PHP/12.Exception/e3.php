<?php
class ServerLoadedException extends Exception{}
class NetworkException extends Exception{}
class DiskFullException extends Exception{} 
interface NetworkStorage{
    function connect();
    function getName();
    function report($data);
}
class MySQLServer implements NetworkStorage{
    function connect(){
       throw new DiskFullException;
    }
    function getName(){
        return "MYSQL";
    }
    function report($data){

    }
}
class PostgresSQLServer implements NetworkStorage{
    function connect(){
        throw new ServerLoadedException;
    }
    function getName(){
        return "PostgresSQL";
    }
    function report($data){
        
    }
}
class MSSQLServer implements NetworkStorage{
    function connect(){
        return $this;

    }
    function getName(){
        return "MSSQL";
    }
    function report($data){
        
    }
    
}
class ConnectionPool{
    private $storage;
    private $connection;
    function __construct(){
        $this->storage=array();
    }
    function addStorage(NetworkStorage $storage){
        array_push($this->storage,$storage);
    }
    function getConnection(){
        foreach($this->storage as $storage){
            try{
              $this->connection=$storage->connect();
            }
            catch(ServerLoadedException $e){
                echo $storage->getName()." "."is Facing Huge Load\n";
                $storage->report(array("ip"=>"123.123.123.111",
                "error"=>"Load"));
            }
            catch(NetworkException $e){
                echo  $storage->getName()." "."is having some problem with It's network\n";
                $storage->report(array("ip"=>"123.123.123.111",
                "error"=>"Netowrk"));
            }
            catch(DiskFullException $e){
                echo  $storage->getName()." "."has it's disk full\n";

            }
            if($this->connection){
                break;
            }
        }
        if($this->connection){
            return $this->connection;
        }
        return false;
    }
}
$mysql=new MYSQLServer();
$pqsql=new PostgresSQLServer();
$mssql=new MSSQLServer();
$cp=new ConnectionPool();
$cp->addStorage($mysql);
$cp->addStorage($pqsql);
$cp->addStorage($mssql);
$connection=$cp->getConnection();
print_r($connection);
?>