<?php 

class Database{

    public $host    = DB_HOST;
    public $user    = DB_USER;
    public $pass    = DB_PASS;
    public $db_name = DB_NAME;

    public $connection;
    public $error;

    public function __construct(){
        $this->connect_db();
    }

    private function connect_db(){
        $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

        if(!$this->connection){
            $this->error = "Connection Failed !!!" . $this->connection->connect_error;
            return false;
        }
    }  

    // Read Data

    public function read_data($query){
        $read_values = $this->connection->query($query) or die($this->connection->error.__LINE__);
        if($read_values->num_rows > 0){
            return $read_values;
        }
        else{
            return false;
        }
    }

}


?>