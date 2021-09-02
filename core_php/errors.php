<?php
	
	// include 'file';
	// include_once 'file';
	// require 'file';
	// require_once 'file';

	// include 'nw_page.php';
	// include 'new_page.php';
	// include 'new_page.php';
	// include 'new_page.php';
	// include 'new_page.php';

	// include_once 'nw_page.php';
	// include_once 'new_page.php';
	// include_once 'new_page.php';
	// include_once 'new_page.php';

	// require 'ne_page.php';
	// require 'new_page.php';
	// require 'new_page.php';
	// require 'new_page.php';
	// require 'new_page.php';

	// require_once 'ew_page.php';
	// require_once 'new_page.php';
	// require_once 'new_page.php';
	// require_once 'new_page.php';
	// require_once 'new_page.php';

//	$a=array(5,15,25);
	// echo array_sum($a);
	// $sum = 0;
	// for ($i=0; $i < count($a); $i++) { 
	// 	$sum = $a[$i]+$sum;
	// }

	// echo $sum;

	//die;

	// $list = "name kumar test huhiuc,asdsa";
	
	// $array = explode(" ", $list);

	// $array2 = explode(",", $array[3]);

	// unset($array[3]);

	// echo "<pre>";

	// print_r($array);
	// print_r($array2);

	// print_r(array_merge($array, $array2));
	// die;
	// if (isset($_POST['submit'])) {

	// 		if (isset($_POST['hobby'])) {
	// 			$hobby = $_POST['hobby'];
	// 		} else {
	// 			$hobby =array();
	// 		}
		
			
	// 		$hobby = implode(",", $hobby);

	// 		echo $hobby;

	// 		// echo "<pre>";
	// 		// print_r($hobby);
	// }

	// Array To String Convert

	// implode

	
	$array = array("Football", "Badminton","Baseball");

	// $value = "Football";

	//in_array(needle, haystack)
	// if(in_array($value, $array)) {
	// 	echo "checked";
	// } else {
	// 	echo "";
	// }

?>

<form method="post">

	<label>Hobby</label>
		<input type="checkbox" name="hobby[]" value="Cricket" <?php 

			if (in_array("Cricket", $array)) {
				echo "checked";
			}

		?>>Cricket
		<input type="checkbox" name="hobby[]" value="Football" <?php 

			if (in_array("Football", $array)) {
				echo "checked";
			}

		?>>Football
		<input type="checkbox" name="hobby[]" value="Tenis" <?php 

			if (in_array("Tenis", $array)) {
				echo "checked";
			}

		?>>Tenis
		<input type="checkbox" name="hobby[]" value="Badminton" <?php 

			if (in_array("Badminton", $array)) {
				echo "checked";
			}

		?>>Badminton

		<input type="checkbox" name="hobby" value="Baseball" <?php echo (in_array("Baseball", $array)) ? 'checked' : '' ?>>Baseball
		<br><br>

	<input type="submit" name="submit">
</form>