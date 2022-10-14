<?php
	trait foo{
		public function sayHello()
		{
			return 'kmn aco';
		}
		public function sayWorld()
		{
			return ' ami valo';
		}
	}
	trait bar{
		public function sayBar(){
			return 'bar ki';
		}
	}
	class fooBar
	{
		use foo,bar;
	}
	$obj = new fooBar;
	echo $obj->sayWorld();