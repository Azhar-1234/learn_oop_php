<?php
	session_start();
	$inactive=5;

	if (isset($_SESSION["time_out"])) {
		$sessionTTL = time()-$_SESSION["time_out"];
		if ($sessionTTL>$inactive) {
			session_destroy();
			header("location:logout.php");
		}
	}
	$_SESSION["time_out"] = time();
