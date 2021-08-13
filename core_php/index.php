<!-- A variable in PHP is a name of memory location that holds data. In PHP, a variable is declared using $ sign followed by variable name.

The main way to store information in the middle of a PHP program is by using a variable. Here are the most important things to know about variables in PHP.

All variables in PHP are denoted with a leading dollar sign ($).

The value of a variable is the value of its most recent assignment.

Variables are assigned with the = operator, with the variable on the left-hand side and the expression to be evaluated on the right.

Variables can, but do not need, to be declared before assignment.

Variables in PHP do not have intrinsic types - a variable does not know in advance whether it will be used to store a number or a string of characters.
Variables used before they are assigned have default values.
PHP does a good job of automatically converting types from one to another when necessary.

Rules for PHP variables:

	A variable starts with the $ sign, followed by the name of the variable

	A variable name must start with a letter or the underscore character

	A variable name cannot start with a number

	A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )

	Variable names are case-sensitive ($age and $AGE are two different variables)
	Syntax of declaring a variable is: -->

<?php 
	// a = 10
	// a = 20
	
	// $name = "Sharvan";

	// echo $name;

	// echo $Name;

	// echo $NAME;


//	$_adas

	//$1qwewq

	//a = 4

	//a = "sharvan"
	//a =5;
	//echo "Hello World!";

	//echo 'Sharvan Kumar';
	
	
	//$names = "Sharvan Kumar 9835400515";

	/*echo "Sharvan Kumar";
	echo "Sharvan Kumar";*/

	// Comments


	//single or multi line comment comes to the end of the line or come first to the current block of php code. HTML code will be printed after 

	// operators


	// +
	// -
	// *
	// /
	// %
	// =
	// ==
	// ===
	// >
	// <
	// >=
	// <=
	// !=
	// and
	// or

	// $a = (int) "1000";

	// var_dump($a);

	// $a = "hkj5T";

	// $b = "6";

	// echo $a . $b;

	// $firstName = "Sharvan";

	// $lastName = "Kumar";

	// $space = " ";

	// echo $firstName." ".$lastName;

	// $a = 58.89;
	// $b = 545.9879879;

	//echo round($a + $b);

	//$c = $a + $b;

	//echo "<br>";

	//echo number_format($c);

	// echo number_format((float)$c, 2, '.', '');

	//echo $c;

	$a = (int) "4";

	$b = 4;

	if($a===$b) {
		echo "Hello";
	} else {
		echo "Hi";
	}

	die;


	if($a==$b) {
		echo "Both Value are same";
	} else {
		echo "Not Match";
	}

	//echo $a==$b;

	die;

	$name = "Rohan";

	$googleLink = "https://www.google.com/";

	$value = "asdsa";

	$a = 55;

	$b = 2;

	echo $a%$b;

	//isset(var)

	// if (isset($value)) {
	// 	echo "Hold";
	// } else {
	// 	echo "Not";
	// }

	//echo $value;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hello This is <?php echo $name; ?></h1>

	<?php 

		echo "<h2>Shivani</h2>";

	?>

	<a href="<?php echo $googleLink; ?>">Google</a>

	<h3><?php

		if (isset($value)) {
			echo $value;
		}

	 ?></h3>

</body>
</html>