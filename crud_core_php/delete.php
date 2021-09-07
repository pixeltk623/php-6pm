<?php 
	require_once 'config.php';

	if (isset($_GET['sid'])) {

		if ($_GET['sid']=='') {
			header("Location: 404.php");
		} else {
			$sid =  $_GET['sid'];
			$query = "DELETE FROM `users` WHERE id = ".$sid;
			$result = mysqli_query($conn, $query);

			if ($result) {
				echo '<script type="text/javascript">'; 
				echo 'alert("Deleted");'; 
				echo 'window.location.href = "index.php";';
				echo '</script>';
			} else {
				echo "Error";
			}
		}

		
	} else {
		header("Location: 404.php");
	}

?>