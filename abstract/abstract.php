<?php 
	abstract class myClass{
		protected $name;
		abstract protected function getName($name);
	}

	class childClass extends myClass{
		public function getName($name){
			return "wellcome".$name;
		}
	} 

	$obj = new childClass();
	echo $obj->getName(" azhar");