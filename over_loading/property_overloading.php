<?php
	/*
		overloding
		1.property overloading
			__set(),__unset(),__get(),__isset()
		2.method overloading
			__call(),__callStatic()

	*/

	class PropertyLoading{
		private $data=[];
		public function __set($propertyName,$propertyValue){
			$this->data[$propertyName] = $propertyValue;
		}
		public function __get($name){
			if (array_key_exists($name, $this->data)) {
				return $this->data[$name];
			}
		}
		public function __isset($name){
			echo isset($this->data[$name])?'Yes':'no';
		}
		public function __unset($name){
			unset($this->data[$name]);
		}
		public function getPropertyValues(){
			print_r($this->data);
		}
	}

	$obj = new PropertyLoading;
	$obj->name = "Azhar Uddin";
	$obj->age  = 19;
	echo $obj->name;
	echo $obj->age;
	// isset($obj->name);
	// unset($obj->age);