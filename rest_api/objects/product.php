<?php
class Product{
  
    // database connection and table name
    private $conn;
    private $table_name = "products";
  
    // object properties
    public $id;
    public $name;
    public $description;
    public $price;
    public $category_id;
    public $category_name;
    public $created;
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
	public function read(){


	  
	    // select all query
	    $query = "SELECT
	                c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
	            FROM
	                " . $this->table_name . " p
	                LEFT JOIN
	                    categories c
	                        ON p.category_id = c.id
	            ORDER BY
	                p.created DESC";
	  	
	    // prepare query statement


	    $result = mysqli_query($this->conn, $query);
	  
	    return $result;
	}


	// create product
	public function create(){

		$query = "INSERT INTO `products`(`name`, `description`, `price`, `category_id`, `created`) VALUES ('$this->name', '$this->description', '$this->price', '$this->category_id', '$this->created')";

	  	
	  	$result = mysqli_query($this->conn, $query);
	  
	    if($result){
	        return true;
	    }
	  
	    return false;
	      
	}

	public function readOne(){
  
    // query to read single record
    $query = "SELECT
                c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
            FROM
                " . $this->table_name . " p
                LEFT JOIN
                    categories c
                        ON p.category_id = c.id
            WHERE
                p.id = ".$this->id."
            LIMIT
                0,1";

  
	    $result = mysqli_query($this->conn, $query);
	    $row = mysqli_fetch_assoc($result);
	  
	    // set values to object properties
	    $this->name = $row['name'];
	    $this->price = $row['price'];
	    $this->description = $row['description'];
	    $this->category_id = $row['category_id'];
	    $this->category_name = $row['category_name'];
	}

	// delete the product
	public function delete(){
	  
	    // delete query
	    $query = "DELETE FROM " . $this->table_name . " WHERE id = ".$this->id;
	  
	   	$result = mysqli_query($this->conn, $query);
	  
	    if($result){
	        return true;
	    }
	  
	    return false;
	}
}
?>