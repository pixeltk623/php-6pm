<?php 
  if (isset($_POST["submit"])) {
  	$number1= $_POST['number1'];
  	$number2= $_POST['number2'];

  	if ($number1=='' & $number2=='') {
  		$error =  "<span style='color: blue; text-align: center;'>Number Can Not Be Blank</span>"; 
  	} else {
  		$number1= $number1 + $number2;
      $number2= $number1 - $number2;
  		$number1= $number1 - $number2;

  		$success1 = "<h3 style='color:blue; text-align:center;'>first number is ".$number1."  </h3>";
  		$success2 = "<h3 style='color:blue; text-align:center;'>second number is ".$number2."  </h3>";
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
   	 <input type="number" name="number1" placeholder="Enter first Number"> <?php  if (isset($error)) { echo $error; } ?>
		<input type="number" name="number2" placeholder="Enter second Number"> <?php  if (isset($error)) { echo $error; } ?>
		<br><br>
   	 <input type="submit" name="submit">
   </form>
   <?php 
		if (isset($success1)) {
			echo $success1;
		}
		if (isset($success2)) {
			echo $success2;
		}
	?>
</body>
</html>