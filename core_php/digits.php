<?php 
	
	// $number = 123;

	// // echo strlen($number);

	// $count = 0;
	// while ($number != 0) {


	// 	$number = floor($number/10);
	// 	$count++;		
	// }

	// echo $count;
	

	// 1. Number Reverse 123 => 321

	// $number = 567;

	// $rev =0;
	// while ($number > 1) {
		
	// 	$rem = $number%10; // 6
	// 	$rev = $rev*10 + $rem; // 7 // 76

	// 	$number = $number/10; // 56

	// }

	// echo $rev;

	// $sum = 0;
	// while ($number>0) {
		
	// 	$rem = $number%10;

	// 	$sum = $sum + $rem;

	// 	$number = floor($number/10);

	// }

	// echo $sum;

$sum = 0;
for($i = 10; $i<=16; $i++) {


	if ($i%2!==0) {
		$sum = $sum + $i;	
	}

}

echo $sum;
?>