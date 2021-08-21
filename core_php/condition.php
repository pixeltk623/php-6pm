<?php 
	
	// PHY
	// CHEM 
	// Bio 
	// Maths 
	// CS 

	// Validation => Blank 

	// 90> = O = Green 

	// 90<= 80> = E = blue 

	// 80<= 70> = A = ligthblue

	// 70<= 60> = B = gray 

	// 60<= 45> = C = yellow

	// 45<= 35> = D = pink 

	// 35<= Fail = red 

	// 3 > greate no 

	// leep year 

	// Current day 

	// Swap no 
	// a = 123
	// b = 569

	// a = 569
	// b = 123 

	// without usiing third varibale 

	// using third variable
	









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
if (condition) {
	# code...
}
    
	
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

	<form>
		<input type="number" id="quantity" name="quantity" min="1" max="5"><br><br>
	</form>
</body>
</html>