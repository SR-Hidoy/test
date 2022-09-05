<?php 
	abstract class  praentsClass{
		public $name;
		abstract protected function calc($a, $b);
	}
	class chidClass extends praentsClass{
		public function calc($c, $d){
			echo $c + $d;
		}
	}
$test = new chidClass();
$test->calc(10, 20);

 ?>