<?php

	class base{
		protected $name;

		public function __construct($n){
			$this->name = $n;
		}

		protected function show(){
			echo "your Name : " . $this->name ."<br> ";
		}
	}

	class derived extends base{
		public function get(){
			echo "Your Name: " . $this->name . "<br>";
		}
	}

$test = new derived("This is protected Name...");
// $test->name = "baba Yahoo";

$test->get();


 ?>