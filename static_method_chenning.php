<?php 
	class Math{
		public static $val;

		public static function init($var){
			static::$val = $var;
			return new static;
		}
		public static function add($var){
			static::$val+=$var;
			return new static;
		}
		public static function sub($var){
			static::$val -=$var;
			return new static;
		}
		public static function out(){
			 return static::$val;
		}
	}
	echo Math::init(12)->add(5)->sub(3)->out();
	echo "<hr>";
	echo Math::sub(23)->out();
	// echo Math::$val;