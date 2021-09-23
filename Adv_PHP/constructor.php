<?php 
	
class Employee { 	

	public $name;
	public $jobTitle;
	private $salary;

	public function __construct($n="",$j="",$s="") {
		$this->name = $n;
		$this->jobTitle = $j;
		$this->salary = $s;
	}
	public function getEmployeeDetails() {

		return "My Name is ".$this->name." and Job Title is ".$this->jobTitle." and salary is ". $this->salary;
	}
	public function __destruct() {
		$this->name;
		$this->jobTitle;
		$this->salary;
	}
}

$object = new Employee("sharvan","Developer","546546");

echo $object->getEmployeeDetails();

// echo "<pre>";

// print_r($object);

?>