<?php 
	session_start();
	$conn = mysqli_connect("localhost","root","","loginsystem");


	if (isset($_POST['submit'])) {
		$uemail = $_POST['uemail'];
		$password = $_POST['password'];

		$query =  "SELECT * FROM user WHERE (username = '$uemail' AND password = '$password') OR (email = '$uemail' AND password = '$password')";

		$res = mysqli_query($conn, $query);

		if ($res->num_rows>0) {
			
			$_SESSION['is_login'] = true;
			header("Location: dashboard.php");

		} else {
			echo "Username/Email Or Password Wrong";
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
		<label>Username/Email</label>
		<input type="text" name="uemail">
		<br><br>
		<label>Password</label>
		<input type="password" name="password">
		<br><br>

		<input type="submit" name="submit">
	</form>

</body>
</html>