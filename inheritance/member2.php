<?php
	class Member2{
		protected $isLoggedIn = false;
		protected $role;
		protected $users=[
			['username'=>"azhar uddin","password"=>"xyz","role"=>"super_admin"],
			['username'=>"raihan","password"=>"xyz123","role"=>"admin"],
			['username'=>"raihan","password"=>"xyz123","role"=>"subscriber"],

		];
		public function Login($user,$pass){
			foreach ($this->users as $user_info) {
				extract($user_info);
				if ($username==$user && $password==$pass) {
					$this->isLoggedIn=true;
					$this->role=$role;
					return true;;
				}
			}		
		}
	}

	class role extends Member2
	{
		
		function __construct($user,$pass)
		{
			if ($this->login($user,$pass)) {
				if ($this->role=='subscriber') {
					echo "You are a subscriber";
				}
				if ($this->role=='admin') {
					echo "You are a admin";
				}
				if ($this->role=='super_admin') {
					echo "You are a super_admin";
				}
				else{
					echo "Invalid username/password";
				}
			}
		}
	}

	$login = new Role('azhar uddin','xyz');
