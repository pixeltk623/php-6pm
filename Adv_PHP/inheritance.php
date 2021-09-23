<?php 
	
	class Father { // Base Class

		public $lastName = "Patel";
		protected $salary = "54654654";
		private $job = "Govt Job";

		public function __construct() {
			echo "Parent Construct";
		}

		public function fatherJob() {
			return $this->job;
		}


	}

	class Son extends Father {

		public function __construct() {
			parent::__construct();
			echo "string";
		}

		public function getSalaryOfFather() {
			return $this->salary;
		}

	}



	$object = new Son();

	echo $object->lastName;
	
	echo $object->fatherJob();

	echo $object->getSalaryOfFather();

	echo "<pre>";

	print_r($object);
?>