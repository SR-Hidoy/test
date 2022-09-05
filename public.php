<?php

	class base{
		public $name;

		public function __construct($n){
			$this->name = $n;
		}

		public function show(){
			echo "your Name : " . $this->name ."<br> ";
		}
	}

$test = new base("Yahoo baba...");
// $test->name = "baba Yahoo";

$test->show();


 ?>
