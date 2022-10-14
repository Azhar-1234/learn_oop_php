<?php
	session_start();
	echo $_SESSION['name'];

	unset($_SESSION['age']);
	
	echo $_SESSION['age'];