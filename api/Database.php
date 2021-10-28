<?php 
	
	class Database  {
		
		private $hostName = "localhost";
		private $userName = "root";
		private $password = "";
		private $databaseName = "api_db";
		public $conn;
		public $result;
		public $query;
		public $finalArray;
		public $response;

		public function __construct() {
			$this->conn = mysqli_connect($this->hostName, $this->userName, $this->password, $this->databaseName);
		}

		public function getAllProducts() {

			$this->query = "SELECT * FROM `products`";

			$this->result = mysqli_query($this->conn, $this->query);

			if ($this->result->num_rows>0) {
				
				while ($this->response[] = mysqli_fetch_object($this->result)) {
				}

				$this->finalArray = array("result" => array_filter($this->response));

			} else {
				$this->finalArray = array("result" => array("No Product Found"));
			}

			return json_encode($this->finalArray);

		}

		public function insertData($data) {

			$this->query = "INSERT INTO `products`(`name`, `description`, `price`, `category_id`) VALUES ('".$data->pname."','','".$data->price."','')";

			$this->result = mysqli_query($this->conn, $this->query);

			return $this->result;
		}
	}

?>