<?php
//connect to our MYSQL database and execute a query
class Database{
    public $connection;

    public function __construct($config,$username='root',$password=''){
        
        
        
       $dsn='mysql:'. http_build_query($config,'',';');//example.com?host=localhost;port=3306;dbname=myapp

        //$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};user=root;charset={$config['charset']}";
        


        $this->connection = new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ]);// PHP data object
        
    }
    public function query($query){
        
        $statement =  $this->connection->prepare($query);
        $statement->execute(); 
        return $statement;
    }
}
?>