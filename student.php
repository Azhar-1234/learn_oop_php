<?php
	
	class Student{
		public $id;
		private $result;
		protected $subject;

		private $data = [
			['name' => 'azhar','id'=>'1','subject'=>'Math'],
			['name' => 'uddin','id'=>'2','subject'=>'English'],
			['name' => 'rana','id'=>'3','subject'=>'English'],

		];
		private function array_search_by_value($searchVal, $columnName){
			$found_key = array_search($searchVal, array_column($this->data, $columnName));

			$this->result = $this->data[$found_key];
		}
		public function studentGetInfo($id){
			$this->array_search_by_value($id,"id");
			return $this->result;
		}
	}

	$obj = new Student;

	print_r($obj->studentGetInfo(2));
	
