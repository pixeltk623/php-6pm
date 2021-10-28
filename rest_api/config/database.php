<?php
class Database{
  
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "api_db_new";
    private $username = "root";
    private $password = "";
    public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;

        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);

        if(!$this->conn) {
            echo "Connection error: ";
        }
        
        return $this->conn;
    }
}
?>