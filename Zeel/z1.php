<?php 
if (isset($_POST["submit"])) {
	$number= $_POST['year'];

	if ($number=='') {
			$error =  "<span style='color: blue; text-align: center;'>Number Can Not Be Blank</span>";
		} else {
			
			if ($number>0) {
				
				if ($number%4==0) {

					if($number%100!=0) {
					
					  $success = "<h3 style='color:green; text-align:center;'>".$number." this is a leap year</h3>";

				     } else {
					  $success = "<h3 style='color:blue; text-align:center;'>".$number." this is not a leap year </h3>";
				    }
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
	<title></title>
</head>
<body>
   <form method="post">
   	 <label>Enter The Year:</label>
   	 <input type="number" name="year" placeholder="Enter The Year"> <?php  if (isset($error)) { echo $error; } ?>
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