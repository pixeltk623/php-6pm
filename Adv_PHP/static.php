<?php 
	
	class StaticMethod {

		public static function OurWebsite() {
			echo "Our Website is www.tops-tech.com";
		}


		public function testData() {
			echo self::OurWebsite();
		}
	}

	$object = new StaticMethod();

	echo "<pre>";

	print_r($object->testData());

	StaticMethod::OurWebsite();

?>