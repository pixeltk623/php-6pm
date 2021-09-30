<?php

  class CrudModel {

    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $databaseName = "php-6pm";
    public $conn;
    public $query;
    public $result;
    public $finalData;

    public function __construct() {
      $this->dbConnection();
    }

    public function dbConnection(){
      $this->conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->databaseName);
      return $this->conn;
    }

    public function getAllData($table) {
      $this->query = "SELECT * FROM $table";
      $this->result = mysqli_query($this->conn, $this->query);
      while ($this->response[] = mysqli_fetch_object($this->result)) {}
      $this->finalData = array_filter($this->response);
      return $this->finalData;
    }

    public function insertData($table, $data) {

    $this->query = "INSERT INTO $table (`name`, `email`, `gender`, `hobby`, `city`, `dob`, `profile_pic`) VALUES ('".$data['name']."','".$data['email']."','".$data['gender']."','','','','')";
    $this->result = mysqli_query($this->conn, $this->query);

    return $this->result;

    }

    public function deleteData($table, $did) {

    $this->query = "DELETE FROM $table  WHERE id= ".$did;
    $this->result = mysqli_query($this->conn, $this->query);

    return $this->result;

    }


    public function editData($table, $eid) {
         $this->query = "SELECT * FROM $table  WHERE id= ".$eid;
        $this->result = mysqli_query($this->conn, $this->query);
        $this->response = mysqli_fetch_object($this->result);

    return $this->response;
    }

    public function updateData($table, $id, $data) {
        $this->query = "UPDATE $table  SET `name`='".$data['name']."',`email`='".$data['email']."',`gender`='".$data['gender']."' WHERE `id`=".$id;
         $this->result = mysqli_query($this->conn, $this->query);
          return $this->result;

    }
  }

?>
