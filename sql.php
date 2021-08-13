<?php 
	
	if (isset($_POST['submit'])) {
		
		echo $name = $_POST['name'];
		echo "<br>";
		echo $updatedTime = date("Y-m-d H:i:s");

		$query = "UPDATE `students` SET `name` = $name, updated_at =$updatedTime  WHERE `students`.`student_id` = 2;";
	}

?>

<form method="post">
	<label>Name</label>
	<input type="text" name="name" value="Sharvan">
	<input type="submit" name="submit" value="Update">
</form>