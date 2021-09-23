<?php 
	
	// trait TName {
	// 	// syntax
	// }
	
	trait message {
		public function greeting() {
			echo "Welcome To Tops Tech Vadodara";
		}
	}
	trait message1 {
		public function welcome() {
			echo "Welcome Vadodara";
		}
	}

	trait message2 {
		public function exit() {
			echo "Thank You For coming";
		}
	}

	class Car {

		use message, message1;

		public function carName() {
			echo "Car Name is BMW";
		}

		public function CarModelNo() {
			echo "Car Model No is BMW1234";
		}
	}


	$object = new Car;

	$object->carName();
	$object->greeting();
	$object->welcome();

	// echo "<pre>";

	// print_r($object);
?>