<?php
/*
	final 关键字
	final 修饰的类不能被子类继承 在类中使用final标识的成员方法，在子类中不能被覆盖      不能使用final标识成员属性
	final class  A{ 
	public $a;
	public function run(){		
			echo "我是".__CLASS__."里面的";	
	}
}
*/
class  A{
	 public $a;		
	 public function run(){		
			echo "我是".__CLASS__."里面的";	
	}
}
class B extends A{
	//不能重写final 修饰的成员方法.	
	public function run(){
		parent::run();		//运行后的结果
		echo "我是".__CLASS__."里面的";		
	}
	public function work(){
		parent::run();	
	}
}
$objectB = new B;

echo "<br />";
$objectB->run();



