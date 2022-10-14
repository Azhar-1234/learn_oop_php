<?php
	session_start();
	$_SESSION['arrToString']='<?php
		function arrToString($array)
		{
			$string="";

			foreach($array as $k=>$v)
			{
				$string.=$k."=>".$v."</br>";
			}
			echo $string;
		}
	?>';
?>