<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<p id="result"></p>
	<h1 id="username">Shivani From Gujarat</h1>
	<button type="button" onclick="getMyName()">Get Name</button>

	<button type="button" onclick="deleteThisItem()">Delete</button>

	<script type="text/javascript">
		//alert("Kumar");
		'use strict'


		function deleteThisItem() {
			var isStatus = confirm("Are You sure want to delete this item")
			var username = document.getElementById('username');
			var result = document.getElementById('result');
			if (isStatus) {
				username.style.display = 'none';
				result.innerHTML = "<h1>Shivani From Mumbai</h1>";
			} else {
				alert("Not Deleted")
			}

			
		}

		function getMyName() {
			console.log("Hello");

			//document.write("Hello Kumar")

			document.getElementById('result').innerHTML = "S Kumar"

			// var para = document.getElementById('result');

			// para.innerHTML = "S Kumar";
			// console.log(para);
		}

		document.write("<h1>Hello This is Kumar</h1>")

		document.write("<p>Hello This is Kumar</p>")

		var email = "s@gmail.com";

		var fname = "Sharvan";
		var lname = "Kumar";

		var a = parseInt("5");

		var b = parseInt("2");

		var x = 5

		var y = 7

		console.log(x+y);


		console.log(a+b);

		console.log(fname+" "+lname);

		console.log(email);

		var nameOfUser = "Sharvan";
		var n1 = 5;
		var isStatus = true;
		var floatValue = 56.33;

		console.log(typeof(isStatus));

		console.log(nameOfUser);
		console.log(n1);
		console.log(isStatus);
		console.log(floatValue);

		console.log("Hello This is Kumar");

	</script>
	<!-- <script src="main.js"></script> -->
</body>
</html>