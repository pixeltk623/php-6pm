<?php 
	
	interface AreaOfSize {

		public function calArea();

	}

	class Rectangle implements AreaOfSize {

		private $length;
		private $width;

		public function __construct($length, $width) {
			$this->length = $length;
			$this->width = $width;
		}

		public function calArea() {

			return ($this->length*$this->width);
		}
	}

	class Square implements AreaOfSize {

		public $side;

		public function __construct($side) {
			$this->side = $side;
		}
		public function calArea() {
			return ($this->side*$this->side);
		}
	}

	class Triangle implements AreaOfSize {
		
		public $base;
		public $height;

		public function __construct($base, $height) {
			$this->base = $base;
			$this->height = $height;
		}
		public function calArea() {
			return ($this->base*$this->height)/2;
		}
	}

	$objectRectangle = new Rectangle(5,6);
	$objectSquare = new Square(5);
	$objectTriangle = new Triangle(8,4);


	// echo "<pre>";

	// print_r($objectRectangle);

	echo $objectRectangle->calArea();
	echo "<br>";
	echo $objectSquare->calArea();
	echo "<br>";
	echo $objectTriangle->calArea();
?>