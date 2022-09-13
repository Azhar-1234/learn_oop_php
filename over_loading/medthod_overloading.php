<?php
	class methodoverloading
	{
		public function sayHello()
		{
			echo "how are you?";
		}
		public function __call($methodName,$argumentName)
		{
			echo $methodName;
			echo "<br>";
			echo "<pre>";
					print_r($argumentName);
			echo "</pre>";
			// echo array_sum($argumentName);
		}
		public static function __callStatic($name,$arguments){
			echo '<br>';
			echo array_sum($arguments);
		}
	}
	$obj = new methodoverloading;
	$students=["Name"=>"Azhar Uddin","Roll"=>977642];
	$obj->Sum($students);
	methodoverloading::mySum(1,2,3);