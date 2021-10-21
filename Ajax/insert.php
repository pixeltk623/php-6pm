<?php 
	
	include_once 'config.php';

	if (isset($_POST)) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];

		$query =  "INSERT INTO `student`(`name`, `email`, `gender`) VALUES ('$name', '$email', '$gender')";

		$res = mysqli_query($conn, $query);

		if ($res) {
			echo 1;
		}
	}

?>