<?php 
	
	include_once 'config.php';

	if (isset($_POST)) {
		
		$id = $_POST['id'];
		

		$query = "DELETE FROM `student` WHERE student_id = ".$id;

		$result = mysqli_query($conn, $query);

		if ($result) {
			echo "1";
		} else {
			echo "0";
		}
	
	}
?>