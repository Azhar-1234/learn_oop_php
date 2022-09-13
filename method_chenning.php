<?php
	 class Person{
	 	private $name = "";
	 	private $age  = "";

	 	public function setName($name){
	 		$this->name = $name;
	 		return $this;
	 	}
	 	public function setAge($age="20"){
	 		$this->age = $age;
	 		return $this;
	 	}
	 	public function getInfo(){
	 		return "my name is".$this->name.".I am ".$this->age ." years old.";
	 	}
	 }

	//  $person = new Person;
	//  $person->setName('azhar');
	//  $person->setAge(21);
	// echo  $person->getInfo();
	 //chenning

	 $person = new Person;
	 echo $person->setName("azhar")->setAge()->getInfo();//age is default in perameter
