<!DOCTYPE html>
<html>
<head>
	<title>Cal</title>
</head>
<body>

	<form method="post">
		<label>Enter Your First Number: </label>
		<input type="text" name="Number1" id="Number1">
		<br><br>

		<label>Enter Your Second Number: </label>
		<input type="text" name="Number2" id="Number2">
		<br><br>

		<label>Operations</label>
		<select id="op">
			<option value="">Select</option>
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>

		<br><br>

		<input type="submit" name="submit" onclick="return calc()">
	</form>

	<h2 id="result"></h2>

	<script type="text/javascript">
		
		function calc() {
			
			var Number1 = parseInt(document.getElementById('Number1').value);
			var Number2 = parseInt(document.getElementById('Number2').value);
			var op = document.getElementById('op').value;

			// console.log(op);
			// console.log(Number1 + Number2);

			var result = 0;

			if (op=='+') {
				result = Number1+Number2;
			} else if(op=='-') {
				result = Number1-Number2;
			} else if(op=='*') {
				result = Number1*Number2;
			} else if(op=='/') {
				result = Number1/Number2;
			}	

			console.log(result);

			document.getElementById('result').innerHTML = result;
			document.getElementById('result').style.color = "red";
			document.getElementById('result').style.fontSize = "50px";

			return false
		}

	</script>

</body>
</html>