<?php
	session_start();

	if (session_status()==1) {
		echo "session not active";
	}
	if (session_status()==2) {
		echo "session active";
	}
	if(session_status()==0){
		echo "session disable";
	}