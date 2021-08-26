<?php 
	
	// for ($i=1; $i < 10; $i++) { 

	// 	if ($i==5) {
	// 		continue;
	// 	}
		
	// 	echo $i;

	// 	echo "<br>";

	// }

	for ($i=1; $i <= 100; $i++) { 
		if($i==1) {
 			echo $i." Not Prime";
 			echo "<br>";
		} else {
			$count = 0;
			for($j = 1; $j<=$i; $j++) {

				if($i%$j==0) {

					$count++;
				}

			}

			if($count==2) {
				echo $i." Number is Prime";
			} else {
				echo $i." Number is Not Prime";
			}

			echo "<br>";
		}

		

	}

?>