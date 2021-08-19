<?php 
	
	// error_reporting(0);

	// $x = date("Y-m-d");

	// $day = date("l",$x);

	// switch ($day) {
	// 	case 'Monday':
	// 		echo $day;
	// 		break;
	// 	case 'Tue':
	// 		echo $day;
	// 		break;
	// 	case 'Wed':
	// 		echo $day;
	// 		break;
	// 	case 'Thursday':
	// 		echo $day;
	// 		break;
	// 	case 'Fri':
	// 		echo $day;
	// 		break;
	// 	case 'Sat':
	// 		echo $day;
	// 		break;
	// 	case 'Sun':
	// 		echo $day;
	// 		break;
		
	// 	default:
	// 		echo "Error";
	// 		break;
	// }

	// number1 number < 

	

	if (isset($_POST['submit'])) {
		
		$number1 = $_POST['number1'];
		$number2 = $_POST['number2'];
		$op = $_POST['op'];

		if ($number1=='') {
			$error1 =  "N1 can not blank";
		}

		if ($number2=='') {
			$error2 =  "N2 can not blank";
		} 


		if (($number1 && $number2)!= '') {
			$result = '';
				switch ($op) {
					case '+':
					// <input type='text' value='".($number1+$number2)."'> 
						$result = "<h2 style='color:green; text-align: center;'>".($number1+$number2)."</h2>";
						break;
					case '-':
						if ($number1>=$number2) {
							$result = "<h2 style='color:green; text-align: center;'>".($number1-$number2)."</h2>";
						} else {
							$result = "<h2 style='color:red; text-align: center;'>N1 < N2</h2>";
						}
						
						break;
					case '*':
						$result = "<h2 style='color:green; text-align: center;'>".($number1*$number2)."</h2>";
						break;
					case '/':

						if ($number1>=$number2) {
							$result = "<h2 style='color:green; text-align: center;'>".($number1/$number2)."</h2>";
						} else {
							$result = "<h2 style='color:red; text-align: center;'>N1 < N2</h2>";
						}
						break;			
					default:
						$result = "<h2 style='color:red; text-align: center;'>Wrong Input</h2>";
						break;
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
		<label>Enter First Number</label>
		<input type="text" name="number1">
		<?php 
			if (isset($error1)) {
				?>
				<span style="color: red;"><?php echo $error1; ?></span>
				<?php
			}
		?>
		<br><br>
		<label>Enter Second Number</label>
		<input type="text" name="number2">
		<?php 
			if (isset($error2)) {
				?>
				<span style="color: red;"><?php echo $error2; ?></span>
				<?php
			}
		?>
		<br><br>
		<label>Operation</label>
		<select name="op">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<br><br>
		<input type="submit" name="submit">
	</form>



	<?php 

		if (isset($result)) {
			echo $result;
		}

	?>
</body>
</html>