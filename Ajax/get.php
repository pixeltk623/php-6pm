<?php 
	
	include_once 'config.php';

	if (isset($_POST)) {
		
		$id = $_POST['eid'];
		

		$query = "SELECT * FROM `student` WHERE student_id = ".$id;

		$result = mysqli_query($conn, $query);

		$response = mysqli_fetch_object($result);

		echo json_encode($response);
	
	}
?>