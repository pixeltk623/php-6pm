<?php
   if (isset($_POST['submit'])) {
   	  $number = $_POST['number'];
        $number1 = $_POST['number'];

        if ($number=='') {
	     	$error1 =  "N1 can not blank";
	     }
         $sum='';
	     while ($number!= 0) {
		     $rem= $number%10;

		     $sum= (int)$sum + pow($rem, 3);
		     $number= floor($number/10);
	     }
	     if ($sum==$number1) {
		     $result= "<h3 style='color:blue; text-align:center;'> ".$number1." number is armstrong number </h3>";
	     } else {
	     	 $result= "<h3 style='color:blue; text-align:center;'> ".$number1." number is not armstrong number </h3>";
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
		<label>Enter The Number:</label>
		<input type="number" name="number" value="number"><?php  if (isset($error1)) { echo $error1; } ?>
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