<?php 
	
	include_once 'config.php';

	$query = "SELECT * FROM `student`";

	$result = mysqli_query($conn, $query);

	while ($response[] = mysqli_fetch_object($result)) {
		
	}

	$finalData = array_filter($response);

	echo json_encode($finalData);


?>