<?php
 if (isset($_POST['submit'])) {
 	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$number3 = $_POST['number3'];
	$number4 = $_POST['number4'];
	$number5 = $_POST['number5'];
	

	if ($number1=='') {
		$error1 =  "N1 can not blank";
	}

	if ($number2=='') {
		$error2 =  "N2 can not blank";
	}

	if ($number3=='') {
		$error3 =  "N3 can not blank";
	}

	if ($number4=='') {
		$error4 =  "N4 can not blank";
	}

	if ($number5=='') {
		$error5 =  "N5 can not blank";
	} 
     
    if (($number1 && $number2 && $number3 && $number4 && $number5)!= '') {
    	$tt='';
    	$tt= $number5+$number4+$number3+$number2+$number1;
    	$av='';
    	$av=$tt/5;
    	$result='';

    	if($av>90) {
    		$result = "<h2 style='color:green; text-align: center;'>   pass with O grade </h2>" 
    	}
    	 else if($av>80 && $av<=90) {
    		$result= "<h2 style='color:green ; text-align: center;'>   pass with E grade </h2>"
    	}
    	 else if ($av>70 && $av<=80) {
    		$result= "<h2 style='color:green ; text-align: center;'>   pass with A grade </h2>"
    	}
    	 else if ($av>60 && $av<=70) {
    		$result= "<h2 style='color:green ; text-align: center;'>   pass with B grade </h2>"
    	}
    	 else if ($av>50 && $av<=60) {
    		$result= "<h2 style='color:green ; text-align: center;'>   pass with C grade </h2>"
    	}
    	 else if ($av>40 && $av<=50) {
    		$result= "<h2 style='color:green ; text-align: center;'>   pass with D grade </h2>"
    	}
    	 else if ($av>30 && $av<=40) {
    		$result= "<h2 style='color:green ; text-align: center;'>   pass with E grade </h2>"
    	}
    	 /*else  ( $av<=30) {
    		$result= "<h2 style='color:red; text-align: center;'> Fail</h2>"
    	}
*/
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
   	 <label>Enter The marks of physics:</label>
   	 <input type="number" name="number1" placeholder="Enter the marks of physics" max="100" min="0"> <?php  if (isset($error)) { echo $error1; } ?>
		<br><br>
		<label>Enter The marks of chemistry:</label>
   	 <input type="number" name="number2" placeholder="Enter the marks of chemistry" max="100" min="0"> <?php  if (isset($error)) { echo $error2; } ?>
		<br><br>
		<label>Enter The marks of Bio:</label>
   	 <input type="number" name="number3" placeholder="Enter the marks of bio" max="100" min="0"> <?php  if (isset($error)) { echo $error3; } ?>
		<br><br>
		<label>Enter The marks of maths:</label>
   	 <input type="number" name="number4" placeholder="Enter the marks of maths" max="100" min="0"> <?php  if (isset($error)) { echo $error4; } ?>
		<br><br>
		<label>Enter The marks of CS:</label>
   	 <input type="number" name="number5" placeholder="Enter the marks of CS" max="100" min="0"> <?php  if (isset($error)) { echo $error5; } ?>
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