<?php
	session_start();
	$image="masik_tafseer_octover.png";

	if (file_exists($image)) {
		$_SESSION['image']['info']=getimagesize($image);
		$_SESSION['image']['imageData']=file_get_contents($image);
		echo "Image :".$image." session veriable success";
	}else{
		echo "find to ".$image;
	}