<?php
	session_start();
	echo "old Id:".session_id();
	echo "<br>";
	session_regenerate_id();
	echo "new regenerate id".session_id();