<?php 
	
	// synatx

	// abstract class ParentClass {
	// 	abstract public function someMethod();
	// 	abstract public function someMethod2($carName, $carColor); 
	// 	abstract public function someMethod3() : string;
	// }

	
	abstract class car {

		public $carName;

		public function __construct($name) {

			$this->carName = $name;

		}

		abstract public function welcome() : string;

	}

	class Maruti extends car {
		
		public function welcome() :string {

			return "Hello This is Sharvan Kumar and my car is ". $this->carName;
		}
		
	}

	class BMW extends car {
		
		public function welcome() :string {

			return "Hello This is Sanjeev Kumar and my car is ". $this->carName;
		}
		
	}

	class Audi extends car {
		
		public function welcome() :string {

			return "Hello This is Zeel Kumar and my car is ". $this->carName;
		}
		
	}

	class Farari extends car {
		
		public function welcome() :string {

			return "Hello This is Shivani Kumar and my car is ". $this->carName;
		}
		
	}

	$obj1 = new Maruti("Maruti 800");
	$obj2 = new BMW("BMW 80");
	$obj3 = new Audi("Audi 2500");
	$obj4 = new Farari("Farari 88700");

	echo $obj1->welcome();
	echo "<br>";
	echo $obj2->welcome();
	echo "<br>";
	echo $obj3->welcome();
	echo "<br>";
	echo $obj4->welcome();


?>