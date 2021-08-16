<?php 
	
	//Q1. Check the no is even;

	// if (condition) {
	// 	# code...
	// }

	// if (condition) {
	// 	# code...
	// } else {
	// 	# code...
	// }

	// if (condition) {
	// 	# code...
	// } else if() {
	// 	# code...
	// } else {

	// }

	// switch (variable) {
	// 	case 'value':
	// 		# code...
	// 		break;
		
	// 	default:
	// 		# code...
	// 		break;
	// }

	// if() {

	// }
	
	//echo $_POST['submit'];
	
	if(isset($_POST['submit'])) {
		
		$number = $_POST['number'];

		//var_dump($number);

		if ($number=='') {
			$error =  "<span style='color: red; text-align: center;'>Number Can Not Be Blank</span>";
		} else {
			
			if ($number>0) {
				
				if ($number%2==0) {
					
					$success = "<h3 style='color:green; text-align:center;'>".$number." Number is Even</h3>";

				} else {
					$success = "<h3 style='color:blue; text-align:center;'>".$number." Number is Odd</h3>";
				}

			} else {
				$error =  "<span style='color: red; text-align: center;'>Number Must be greater than 0</span>";
			}
			
		}
		
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Even No</title>
</head>
<body>
	
	<form method="post">
		<label>Enter Your Number: </label>
		<input type="number" name="number" placeholder="Enter Your Number"> <?php  if (isset($error)) { echo $error; } ?>
		<br><br>
		<input type="submit" name="submit">
	</form>
	<?php 
		if (isset($success)) {
			echo $success;
		}
	?>
</body>
</html>