<?php 
	
class Employee {

	public $name;
	public $jobTitle;
	private $salary;


	public function setName($nameOfEmployee="") {
		$this->name = $nameOfEmployee;
	}

	public function getName() {
		return $this->name;
	}

	public function setSalary($s="") {
		$this->salary = $s;
	}

	public function getSalary() {
		return $this->salary;
	}

}

$object = new Employee();

$object->setName("Sharvan");
$object->setSalary(3566);



echo $object->getName();
echo $object->getSalary();
echo "<pre>";

print_r($object);

?>