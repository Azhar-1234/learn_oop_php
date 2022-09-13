<?php
	spl_autoload_register(function($className){
		include_once"$className.php";
	});

	$member = new Member();

	$member->username = "Azhar Uddin";

	$member->login();

	$member->logout();


	echo $member->username." is ".($member->isLoggedIn()?"Logged In":"Logged Out");

	$admin = new Administrator();
	$admin->username = "Noman";
	$admin->login();

	echo $admin->username." is ".($admin->isLoggedIn()?"Logged as Administrator":"Logged Out");
	$admin->createForum("w3progrramers");
	$admin->banMember($member);