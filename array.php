<?php

	
	// $listOfUser = array(
	// 	array(
	// 		"name"=>"kumar",
	// 		"email"=>"s@gmail.com",
	// 		"mobile"=>9835401515,
	// 		"age"=>24,
	// 		"address"=>array(
	// 			"city"=>"XYZ",
	// 			"pincode" => "801301"
	// 		)
	// 	),
	// 	array(
	// 		"name"=>"kumar",
	// 		"email"=>"s@gmail.com",
	// 		"mobile"=>9835401515,
	// 		"age"=>24,
	// 		"address"=>array(
	// 			"city"=>"XYZ",
	// 			"pincode" => "801301"
	// 		)
	// 	),
	// 	array(
	// 		"name"=>"kumar",
	// 		"email"=>"s@gmail.com",
	// 		"mobile"=>9835401515,
	// 		"age"=>24,
	// 		"address"=>array(
	// 			"city"=>"XYZ",
	// 			"pincode" => "801301"
	// 		)
	// 	),
	// 	array(
	// 		"name"=>"kumar",
	// 		"email"=>"s@gmail.com",
	// 		"mobile"=>9835401515,
	// 		"age"=>24,
	// 		"address"=>array(
	// 			"city"=>"XYZ",
	// 			"pincode" => "801301"
	// 		)
	// 	),
	// 	array(
	// 		"name"=>"kumar",
	// 		"email"=>"s@gmail.com",
	// 		"mobile"=>9835401515,
	// 		"age"=>24,
	// 		"address"=>array(
	// 			"city"=>"XYZ",
	// 			"pincode" => "801301"
	// 		)
	// 	),
	// 	array(
	// 		"name"=>"kumar",
	// 		"email"=>"s@gmail.com",
	// 		"mobile"=>9835401515,
	// 		"age"=>24,
	// 		"address"=>array(
	// 			"city"=>"XYZ",
	// 			"pincode" => "801301"
	// 		)
	// 	),
	// 	array(
	// 		"name"=>"kumar",
	// 		"email"=>"s@gmail.com",
	// 		"mobile"=>9835401515,
	// 		"age"=>24,
	// 		"address"=>array(
	// 			"city"=>"XYZ",
	// 			"pincode" => "801301"
	// 		)
	// 	),
	// 	array(
	// 		"name"=>"kumar",
	// 		"email"=>"s@gmail.com",
	// 		"mobile"=>9835401515,
	// 		"age"=>24,
	// 		"address"=>array(
	// 			"city"=>"XYZ",
	// 			"pincode" => "801301"
	// 		)
	// 	),
	// 	array(
	// 		"name"=>"kumar",
	// 		"email"=>"s@gmail.com",
	// 		"mobile"=>9835401515,
	// 		"age"=>24,
	// 		"address"=>array(
	// 			"city"=>"XYZ",
	// 			"pincode" => "801301"
	// 		)
	// 	),
	// 	array(
	// 		"name"=>"kumar",
	// 		"email"=>"s@gmail.com",
	// 		"mobile"=>9835401515,
	// 		"age"=>24,
	// 		"address"=>array(
	// 			"city"=>"XYZ",
	// 			"pincode" => "801301"
	// 		)
	// 	)

	// );

	// for ($i=0; $i < count($listOfUser); $i++) { 
		
	// 	echo $i+1;
	// 	echo $listOfUser[$i]['name'];
	// 	echo $listOfUser[$i]['email'];
	// 	echo $listOfUser[$i]['mobile'];
	// 	echo $listOfUser[$i]['age'];
	// 	echo $listOfUser[$i]['address']['city'];
	// 	echo $listOfUser[$i]['address']['pincode'];
	// 	echo "<br>";

	// }

	// echo "<pre>";
	// print_r($listOfUser);
	
	if (isset($_POST['submit'])) {
		
		$file = $_FILES['file'];

		// if (file_exists("uploads/".$file['name'])) {
		// 	echo "Hai";
		// } else {
		// 	echo "Nahi Hai";
		// }

		for ($i=0; $i < count($file['name']); $i++) { 
			move_uploaded_file($file['tmp_name'][$i], "uploads/".$file['name'][$i]);
		}

		

		echo "<pre>";

		print_r($file);

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<br><br>
		<!-- <table class="table table-bordered">
			<tr>
				<th rowspan="2">Sr.No</th>
				<th rowspan="2">Name</th>
				<th rowspan="2">Email</th>
				<th rowspan="2">Mobile</th>
				<th rowspan="2">Age</th>
				<th colspan="2">Address</th>
			</tr>
			<tr>
				<th>City</th>
				<th>PinCode</th>
			</tr> -->

			<?php 
			/*
				foreach ($listOfUser as $key => $value) {
					?>
						<tr>
							<td><?php echo ++$key; ?></td>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['email']; ?></td>
							<td><?php echo $value['mobile']; ?></td>
							<td><?php echo $value['age']; ?></td>
							<td><?php echo $value['address']['city']; ?></td>
							<td><?php echo $value['address']['pincode']; ?></td>
						</tr>
					<?php
				}
			?>

			<?php /*
				for ($i=0; $i < count($listOfUser); $i++) { 
					?>
					<tr>
						<td><?php echo $i+1; ?></td>
						<td><?php echo $listOfUser[$i]['name']; ?></td>
						<td><?php echo $listOfUser[$i]['email']; ?></td>
						<td><?php echo $listOfUser[$i]['mobile']; ?></td>
						<td><?php echo $listOfUser[$i]['age']; ?></td>
						<td><?php echo $listOfUser[$i]['address']['city']; ?></td>
						<td><?php echo $listOfUser[$i]['address']['pincode']; ?></td>
					</tr>
					<?php
				} */
			?>
		<!-- </table> -->

		<form method="POST" enctype="multipart/form-data">
			<label>File</label>
			<input type="file" name="file[]" multiple>
			<input type="submit" name="submit">
		</form>
	</div>
</body>
</html>