<?php
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST, GET, PUT, DELETE");
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

	include_once 'Database.php';

	$database = new Database();

	
	if (isset($_SERVER['PATH_INFO'])) {
		
		switch ($_SERVER['PATH_INFO']) {
			case '/products':
					echo $database->getAllProducts();
				break;

			case '/products/create':
					
					$data = json_decode(file_get_contents("php://input"));


					print_r($data);



				break;
			
			default:
				# code...
				break;
		}


	} else {

		echo json_encode("No a Valid Url");

	}


?>