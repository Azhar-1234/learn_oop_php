<?php 
	trait auth{
		public function author(){
			return 'login as a author';
		}
	}
	trait admin {
		public function administrator()
		{
			return 'login as a administrator';
		}
	}
	class member
	{
		use auth,admin;
		public function run()
		{
			$this->author();
			$this->administrator();
			echo "member login done";
		}
	}
	$obj = new member;
	$obj->run();