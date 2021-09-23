<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script type="text/javascript">
  		var emailInput ="a@gmail.com";
  		var atPos = emailInput.indexOf("@");
  		var dotPos = emailInput.indexOf(".");
  		var emailLength = emailInput.length;
  		if (atPos < 1 || dotPos < atPos + 2 || dotPos + 2 > emailLength) {
    		alert("Invalid Email format");
    		
  		} else {
  			alert("Valid")
  		}
  	

</script>
</body>
</html>