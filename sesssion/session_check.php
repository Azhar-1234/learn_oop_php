<?php 
	session_start();
	if (defined('SID')) {
		echo "session active";
	}else{
		echo "session is not active";
	}