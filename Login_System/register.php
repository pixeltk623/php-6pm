<?php 
	
	$conn = mysqli_connect("localhost","root","","loginsystem");

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$queryC = "SELECT * FROM user WHERE username = '$uname' OR email = '$email'";

		$resC = mysqli_query($conn, $queryC);

		if ($resC->num_rows>0) {
			echo "Email or username already present";
		} else {
			$query = "INSERT INTO `user`(`name`, `username`, `email`, `password`) VALUES ('$name','$uname','$email','$password')";

				$res = mysqli_query($conn, $query);

				if ($res) {
					echo "Registration Done";
				} else {
					echo "Error";
				}
		}

	

		
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<label>Name</label>
		<input type="text" name="name">
		<br><br>
		<label>Username</label>
		<input type="text" name="uname">
		<br><br>
		<label>Email</label>
		<input type="email" name="email">
		<br><br>
		<label>Password</label>
		<input type="password" name="password">
		<br><br>
		<input type="submit" name="submit">

	</form>
</body>
</html>