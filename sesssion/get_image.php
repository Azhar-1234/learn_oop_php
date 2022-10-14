<?php 
	session_start();
	header("content-type:image/jpeg");
	echo $_SESSION['image']['imageData'];