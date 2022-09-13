<?php
	class Course{
		protected static $coursName = "python advance course";

		public static function getCourseName(){
			return static::$coursName;
		}

	}
	class Student extends Course{
		protected static $coursName="zend php";
	}
	echo Student::getCourseName();

	// $obj = new Student;
	// echo $obj->getCourseName();