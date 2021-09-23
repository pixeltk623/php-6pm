<?php 
	
	class Test {
		const WELECOME_MESSAGE = "Good Morning";

		public function constMessage() {

			return self::WELECOME_MESSAGE;
		}

	}

	// echo Test::WELECOME_MESSAGE;

	$obj = new Test();

	echo $obj->constMessage();

?>