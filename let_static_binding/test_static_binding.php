<?php 
	class testStaticBinding{
		public static $count=0;
		public static $counter=1;
		public static function counter(){
			echo self::$count++,"<br>";
		}
	}
	testStaticBinding::counter();
	testStaticBinding::counter();
	testStaticBinding::counter();