<?php

	class Person{
		
		public $name;
		public $age;
		
		public function __construct($name,$age){
			$this->name = $name;
			$this->age = $age;
		}
		
		public function __destruct(){
			echo $this->name.'销毁数据<br/>';
		}
	}

	$a = new Person('刘宝南',22);