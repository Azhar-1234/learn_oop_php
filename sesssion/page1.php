<?php 
	session_start();

	$_SESSION['foo']='
		<?php
			function foo(){
				echo "its a foo function";
			}
		?>';
?>