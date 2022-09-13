<?php
	class Member
	{
		public $userName = "";
		private $loggedIn = false;
		public $loginTime;
		public $logOut;
		public $email = "azhar64100@gmail.com";
		private $conn;
		public function login()
		{
			$this->loggedIn = true;
			$this->loginTime = getdate();
		}
		public function logout()
		{
			$this->loggedIn = false;
			$this->logoutTime = getdate();
		}
		public function isLoggedIn()
		{
			return $this->loggedIn;
		}
		public function __sleep()
		{
			return ["email"];
		}
		public function dbConnect()
		{

			$this->conn = new mysqli("localhost","root","","f10");
		}
		public function __wakeup()
		{
			$this->dbConnect();
		}
		public function getAll($email)
		{
			$sql = "SELECT * FROM users  WHERE email='$email'";
			$result = $this->conn->query($sql);

			return $result->fetch_all(MYSQLI_ASSOC);
		}
		public function __toString()
		{
			return 'converted to string';
		}

	}

	$member = new Member;
	echo $member;
	// $member->username = "azhar";
	// $member->login();

	// $memberString = serialize($member);
	
	// echo $memberString;
	// $memberObj = unserialize($memberString);
	// echo "<pre>";
	// 	print_r($memberObj);
	// echo "</pre>";
	// echo "<pre>";
	// 	print_r($member->getAll($memberObj->email));
	// echo "</pre>";