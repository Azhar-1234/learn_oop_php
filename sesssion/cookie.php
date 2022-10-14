<?php 
	if (!isset($_COOKIE['user'])) {
		setcookie("user","azhar",time()+10,'/');
		echo "cookie set";
	}else{
		echo "cookie not set";
	}
