<?php 
	
	session_start();

	echo "<pre>";

	print_r($_SESSION);

	$name = "Kumar";

	$_SESSION['name'] = $name;
	$_SESSION['email'] = "s@gmail.com";
	$_SESSION['mobile'] = 9835401515;
	$_SESSION['gender'] = "Male";

	echo $name;

?>