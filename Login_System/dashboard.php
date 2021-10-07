<?php 
	
	session_start();

	// echo "<pre>";

	// session_destroy();

	// print_r($_SESSION);

	if (!isset($_SESSION['is_login'])) {
		header("Location: login.php");
	} else {
		?>	

		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>
			<h1>Welcome To Dashboard </h1>

			<a href="logout.php">Logout</a>
		</body>
		</html>

		<?php
		
	}

?>