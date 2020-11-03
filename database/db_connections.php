<?php
//CONNECTIONS VALUES
const DB_HOST = '3.236.154.247';
const DB_USER = 'mrrobot';
const DB_PWD = 'Dsg2019*';
const DB_NAME = 'dsg_task_management_db';
/* const DB_HOST = '127.0.0.1';
const DB_USER = 'root';
const DB_PWD = '';
const DB_NAME = 'task_management_db_170720'; */

//CONNECTIONS CLASS
class DB_Connection{
    public $host;
    public $user;
    public $pwd;
    public $bd;
    public $conn;

    
    //INITIALIZE VARIABLES
    public function __construct(){
        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->pwd = DB_PWD;
        $this->bd = DB_NAME;
    }

    //CONNECTION FUNCTION
    private function connect(){
        try {
            $this->conn = mysqli_connect($this->host, $this->user, $this->pwd, $this->bd);

            if ($this->conn){
                return $this->conn;
            } else{
                throw new Exception('No fue posible conectarse a la base de datos.');
            }
        } 
        catch (Exception $e){
            echo '<h4>Error [ '.$e->getMessage().' ]</h4>';
        }
    }

    //DISCONNECTION FUNCTION
    private function disconnect(){
        try{
            if (!mysqli_close($this->conn)){
                throw new Exception('No fue posible conectarse a la base de datos.');
            }
        }
        catch (Exception $e) {
            echo '<h4>Error [ '.$e->getMessage().' ]</h4>';
        }
    }

    //dbResult return the result of queryResult
    public function dbResult($query){
        return $this->queryResult($query);
    }

    //queryResult returns the result of a query to the database
    private function queryResult($query){
        $conn = $this->connect();
        $conn->set_charset('utf8');
        @$result = @$conn->query(@$query);
        return @$result;
        $this->disconnect();
    }

    //authenticate users in the database to access the app
    public function Authenticate($usr,$pwd){
        $query = "Call sp_login('$usr','$pwd')";
        $result = mysqli_query($this->connect(),$query);
        return $result;
    }
}
?>