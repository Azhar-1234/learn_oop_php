<?php
	session_start();
	$array=["azhar","uddin","ifat"];
	eval('?>'.$_SESSION['arrToString']);

	arrToString($array);

?>