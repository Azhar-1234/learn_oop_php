<?php 
	class objectColoning
	{
		public $name;
		private $mobile;

		public function __construct($name,$mobile)
		{
			$this->name = $name;
			$this->mobile = $mobile;
		}
		public function __clone(){
			$this->mobile = "01867658884";
		}

		public function __invoke($num1,$num2){
			echo  $num1 + $num2;
		}
	}

	$obj1 = new objectColoning('azhar','01815128784');
	$obj2 = clone $obj1;

	$obj2->name = 'raihan';

	$obj1->name = 'abdullah';
	echo "<pre>";
		print_r($obj1);
	echo "</pre>";
	echo "<pre>";
		print_r($obj2);
	echo "</pre>";

	
	// $obj1(4,3);//__invoke magic function use for object convert into function