<?php

	
	$listOfUser = array(
		array(
			"name"=>"kumar",
			"email"=>"s@gmail.com",
			"mobile"=>9835401515,
			"age"=>24,
			"address"=>array(
				"city"=>"XYZ",
				"pincode" => "801301"
			)
		),
		array(
			"name"=>"kumar",
			"email"=>"s@gmail.com",
			"mobile"=>9835401515,
			"age"=>24,
			"address"=>array(
				"city"=>"XYZ",
				"pincode" => "801301"
			)
		),
		array(
			"name"=>"kumar",
			"email"=>"s@gmail.com",
			"mobile"=>9835401515,
			"age"=>24,
			"address"=>array(
				"city"=>"XYZ",
				"pincode" => "801301"
			)
		),
		array(
			"name"=>"kumar",
			"email"=>"s@gmail.com",
			"mobile"=>9835401515,
			"age"=>24,
			"address"=>array(
				"city"=>"XYZ",
				"pincode" => "801301"
			)
		),
		array(
			"name"=>"kumar",
			"email"=>"s@gmail.com",
			"mobile"=>9835401515,
			"age"=>24,
			"address"=>array(
				"city"=>"XYZ",
				"pincode" => "801301"
			)
		),
		array(
			"name"=>"kumar",
			"email"=>"s@gmail.com",
			"mobile"=>9835401515,
			"age"=>24,
			"address"=>array(
				"city"=>"XYZ",
				"pincode" => "801301"
			)
		),
		array(
			"name"=>"kumar",
			"email"=>"s@gmail.com",
			"mobile"=>9835401515,
			"age"=>24,
			"address"=>array(
				"city"=>"XYZ",
				"pincode" => "801301"
			)
		),
		array(
			"name"=>"kumar",
			"email"=>"s@gmail.com",
			"mobile"=>9835401515,
			"age"=>24,
			"address"=>array(
				"city"=>"XYZ",
				"pincode" => "801301"
			)
		),
		array(
			"name"=>"kumar",
			"email"=>"s@gmail.com",
			"mobile"=>9835401515,
			"age"=>24,
			"address"=>array(
				"city"=>"XYZ",
				"pincode" => "801301"
			)
		),
		array(
			"name"=>"kumar",
			"email"=>"s@gmail.com",
			"mobile"=>9835401515,
			"age"=>24,
			"address"=>array(
				"city"=>"XYZ",
				"pincode" => "801301"
			)
		)

	);

	// echo "<pre>";

	// print_r($listOfUser);

// echo count($listOfUser);

	// foreach ($listOfUser as $key => $value) {
	// 	echo ++$key;
	// 	echo $value['name'];
	// 	echo $value['email'];
	// 	echo $value['mobile'];
	// 	echo $value['age'];
	// 	echo "<br>";
	// }


	// for ($i=0; $i < count($listOfUser); $i++) { 
		
	// 	echo ($i+1);
	// 	echo $listOfUser[$i]['name'];
	// 	echo $listOfUser[$i]['email'];
	// 	echo $listOfUser[$i]['mobile'];
	// 	echo $listOfUser[$i]['age'];

	// 	echo "<br>";
	// }
	
	// $array = array(1,"sds", true, 2.5);


	// echo "<pre>";
	// var_dump($array);


//	print_r($array);

	// print_r(expression)
	// echo $array;
	

	// types of array 

	// 1. indexed Array 
	// 2. associative array 
	// 3. Multidimensonal Array

	// $multi = array(
	// 	array(array()),
	// 	array(
	// 		array(
	// 			array("name"=>"kumar")
	// 		)
	// 	)
	// );


	// echo $multi[1][0][0]['name'];

	// echo "<pre>";

	// print_r($multi); 
	

// 	$associative = array(
// 		"name" => "sharvan",
// 		"town" => "ekangarsarai",
// 		"salary" => "100",
// 		"mobile"=> 9835401515
// 	);

// 	echo "<pre>";
// //	print_r(sizeof($associative));

// 	echo "My Name is ".$associative['name']." - ". $associative['town']." - ". $associative['salary']." - ". $associative['mobile'];

// 	print_r($associative);

	// die;
	

	// $array = array("sharvan", "sanjeev", "Raushan", "sharvan", "sanjeev", "Raushan");

	// $array = [2];
	// echo "<pre>";
	// print_r($array);

	// echo $array[2];	

	// $newList = "<ul><li></li><li></li><li></li><li></li></ul>";

	// $list = "<ul>";
	// 	for ($i=0; $i < sizeof($array); $i++) { 
	// 		$list .= "<li>".$array[$i]."</li>";
	// 	}
	// $list .= "</ul>";

	// echo $list;
?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<?php 
			for ($i=0; $i < sizeof($array); $i++) { 
		?>
			<li><?php echo $array[$i]; ?></li>

		<?php
			}
		?>
	</ul>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
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
      </tr>
    </thead>
    <tbody>

    	<?php 
    		foreach ($listOfUser as $key => $value) {
    	?>
	      <tr>
	      	<td><?php echo ++$key; ?></td>
	      	<td><?php echo $value['name']; ?></td>
	      	<td><?php echo $value['email']; ?></td>
	      	<td><?php echo $value['mobile']; ?></td>
	      	<td><?php echo $value['age']; ?></td>
	      	<td><?php echo $value['address']['city'] ; ?></td>
	      	<td><?php echo $value['address']['pincode'] ; ?></td>
	      </tr>
    	<?php
    		}
    	?>
    </tbody>
  </table>
</div>

</body>
</html>
