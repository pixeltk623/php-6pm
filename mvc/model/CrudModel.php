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

    public function getAllData() {
      $this->query = "SELECT * FROM `users`";
      $this->result = mysqli_query($this->conn, $this->query);
      while ($this->response[] = mysqli_fetch_object($this->result)) {}
      $this->finalData = array_filter($this->response);
      return $this->finalData;
    }

  }

?>
