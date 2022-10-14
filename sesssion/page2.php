<?php 
	session_start();
	eval('?>'.$_SESSION['foo']);
	foo();
?>