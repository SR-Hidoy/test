<?php

	class base{
		private $name;

		public function __construct($n){
			$this->name = $n;
		}

		public function show(){
			echo "your Name : " . $this->name ."<br> ";
		}
	}

	class derived extends base{
		public function get(){
			echo "Your Name: " . $this->name . "<br>";
		}
	}

$test = new derived("This is protected Name...");
$test->name = "baba Yahoo";

$test->show();


 ?>