<?php 
	
class Car {

	// public private protected

	public $name = "Kumar";
	private $modelNo = 455465;
	protected $color = "red";
	public $issueDate = "2021-04-04";

	public $carType;

	public function getCarModelNumber() {
		return "This is Car Model No ".$this->modelNo;
	}

	public function getColor() {
		return $this->color;
	}


}


$object = new Car();

echo "<pre>";



$object->carType = "Volvo";


print_r($object);


echo $object->name;
echo $object->issueDate;

echo $object->getCarModelNumber();

echo $object->getColor();


// print_r($object->color);
// print_r($object->modelNo);





?>