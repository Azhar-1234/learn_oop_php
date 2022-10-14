<?php 
	// class anonymous
	// {
	// 	public function log()
	// 	{
	// 		return 'log is log';
	// 	}
	// }

	// $obj  = new anonymous;
	// echo $obj->log();
		//anonymous plus
	// $obj = (new class(){
	// 	public  function log(){
	// 		return "what's log?";
	// 	}
	// });
	// echo $obj->log();
	
	class test
	{

	}
	interface testInterface
	{

	}
	$obj = (new class() extends test implements testInterface{
		public  function log(){
			return "what's log?";
		}
	});
	echo $obj->log();
