<?php 
	
	abstract class PreFixName {

		abstract public function setPreFixOfUser($name, $gender); 
	}

	class SetPreFixOfName extends PreFixName
	{
		
		public function setPreFixOfUser($name, $gender) {
			if($gender=='Male') {
				$preFix = "Mr. ".$name;
			} elseif($gender=='Female') {
				$preFix = "Ms. ".$name;
			} else {
				$preFix = $name;
			}

			return $preFix;
		}
	}

	$obj = new SetPreFixOfName();
	echo $obj->setPreFixOfUser("Sharvan","Male");
	echo "<br>";
	echo $obj->setPreFixOfUser("Shivani","Female");
	echo "<br>";
	echo $obj->setPreFixOfUser("Zeel","");
	// echo "<pre>";
	// print_r($obj);
?>