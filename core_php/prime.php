<?php 

	
	// 1 = 1

	
	// 2 = 1 2
	// 3 = 1 3 
	// 4 = 1 2 4 
	// 5 = 1 5
	// 6 = 1 2 3
	// 7 = 1 7
	// 8 = 1 2 4 8
	// 9 = 1 3 9
	// 10 = 1 2 5 10
	
	if (isset($_POST['submit'])) {
		
		$number = $_POST['number'];

		if ($number!='') {
			
			if ($number>0) {
				
				if($number==1) {
					echo "Not Prime No";
				} else {
					$count = 0;
					for($i = 1; $i<=$number; $i++) {

						if($number%$i==0) {

							$count++;

						}

					}

					if ($count==2) {
						echo $number. " is Prime";
					} else {
						echo $number. " is Not Prime";
					}

				}

			} else {
				echo "Inavlid Number";
			}	

		} else {
			$error = "<span style='color:red;'>Number Can Not Be blank</span>";
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
		<label>Enter The Number</label>
		<input type="number" name="number">
		<?php 
			if (isset($error)) {
				echo $error;
			}
		?>
		<input type="submit" name="submit">
	</form>
</body>
</html>