<?php
  if (isset($_POST['submit'])) {
  	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$number3 = $_POST['number3'];

    if ($number1=='') {
		$error1 =  "N1 can not blank";
	}

	if ($number2=='') {
		$error2 =  "N2 can not blank";
	}

	if ($number3=='') {
		$error3 =  "N3 can not blank";
	}
    $max='';
    $min='';
	if ($number1> $number2 && $number1>$number3) {
		$max= "<h3 style='color:green; text-align:center;'> max nmber is ".$number1." </h3>";
	} else if ($number2> $number1 && $number2>$number3) {
		$max = "<h3 style='color:green; text-align:center;'>max number is ".$number2."  </h3>";
	} else {
		$max = "<h3 style='color:green; text-align:center;'>max number is ".$number3."  </h3>";
	}

	if ($number1< $number2 && $number1<$number3) {
		$min = "<h3 style='color:blue; text-align:center;'>min number is ".$number1."  </h3>";
	} else if ($number2< $number1 && $number2<$number3) {
		$min = "<h3 style='color:blue; text-align:center;'>min number is ".$number2."  </h3>";
	} else {
		$min = "<h3 style='color:blue; text-align:center;'>min number is ".$number3."  </h3>";
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
    	<label>Enter First Number:</label>
    	<input type="number" name="number1" value="number1"><?php  if (isset($error1)) { echo $error1; } ?>
    	<br><br>
    	<label>Enter Second Number:</label>
    	<input type="number" name="number2" value="number2"><?php  if (isset($error2)) { echo $error2; } ?>
    	<br><br>
    	<label>Enter Third Number:</label>
    	<input type="number" name="number3" value="number3"><?php  if (isset($error3)) { echo $error3; } ?>
    	<br><br>
    	<input type="submit" name="submit">
    </form>
</body>
</html>
<?php 

		if (isset($max)) {
			echo $max;
		}
		if (isset($min)) {
			echo $min;
		}

	?>