<?php 

	if (isset($_POST['submit'])) {
		
		echo "<pre>";

		print_r($_POST);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST">
		<label>Name: </label>
		<input type="text" name="name" id="name">
		<span id="e1"></span>
		<br><br>


		<label>Gender: </label>
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<span id="e2"></span>
		<br><br>


		<label>City: </label>
		<select name="city" id="city">
			<option value="">Select</option>
			<option value="Vadodara">Vadodara</option>
		</select>
		<span id="e3"></span>
		<br><br>


		<label>Hobby: </label>
		<input type="checkbox" name="hobby[]" value="Cricket">Cricket
		<input type="checkbox" name="hobby[]" value="Football">Football
		<input type="checkbox" name="hobby[]" value="Tenis">Tenis
		<span id="e4"></span>
		<br><br>

		<input type="submit" name="submit" onclick="return validateForm()">
	</form>

	<script type="text/javascript">
		function validateForm() {
			
			var nameOfUser = document.getElementById('name').value;
			var gender = document.getElementsByName('gender');
			var city = document.getElementById('city').value;
			var hobby = document.getElementsByName('hobby[]');

			// console.log(nameOfUser);
			// console.log(gender);
			// console.log(city);
			// console.log(hobby);

			var count = 0;
			var countH = 0;

			if (nameOfUser=='') {
				document.getElementById('e1').innerHTML =  "Name Can not be blank";
				document.getElementById('e1').style.color =  "red";
			} else {
				document.getElementById('e1').innerHTML =  "";
				
			}


			for (var i = 0; i < gender.length; i++) {
				
				if (gender[i].checked==true) {
					count++;
				}
			}

			if (count>0) {
				document.getElementById('e2').innerHTML =  "";
			} else {
				document.getElementById('e2').innerHTML =  "Gender Error";
				document.getElementById('e2').style.color =  "red";
			}

			if (city=='') {
				document.getElementById('e3').innerHTML =  "City Error";
				document.getElementById('e3').style.color =  "red";
			} else {
				document.getElementById('e3').innerHTML =  "";
			}


			for (var j = 0; j < hobby.length; j++) {
				
				if (hobby[j].checked==true) {
					countH++;
				}
			}


			if (countH>0) {
				document.getElementById('e4').innerHTML =  "";
			} else {
				document.getElementById('e4').innerHTML =  "Hobby Error";
				document.getElementById('e4').style.color =  "red";
			}


			if(nameOfUser != '' && city != '' && count > 0 && countH >0) {
				return true;
			}

			return false;
		}
	</script>

</body>
</html>