<?php
  if (isset($_POST['submit'])) {
  	$number = $_POST['number'];

  	if ($number=='') {
		$error =  "Number can not blank";
	}

	$t1=0; $t2=1;
	$nexttm= 0;
    $fibo=0;
	for ($i=0; $i < $number; $i++) { 
		if($number<=1) {
			$nexttm= $i;
		} else {
		   $nexttm= $t1+$t2;
		   $t1=$t2;
		   $t2=$nexttm;
	    } 
	    echo $nexttm;
        echo "</br>";
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
		<label>Enter The number of Terms</label>
		<input type="number" name="number" value="number"><?php  if (isset($error)) { echo $error; } ?>
		<input type="submit" name="submit" value="submit">
	</form>
<!-- <?php 
    for ($i=0; $i < $number; $i++) { 
    	
		if (isset($fibo)) {
			echo $fibo;
		}
	}	

	?> -->
</body>
</html>