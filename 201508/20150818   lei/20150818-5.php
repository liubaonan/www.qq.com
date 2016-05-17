<?php
/*
abstact
	抽象类里面不一定有抽象方法	
	拥有抽象方法的类一定是抽象类		
	//抽象类不能被实例化，如果要使用 必须书写子类。	
	//子类必须重写父类里面的抽象方法
*/

abstract class B{				//类B 也是抽象类 因为类里面包含了抽象方法
	public function run(){
		echo "我在跑";
	}	
	abstract function say();		
}
//子类必须实现抽象类里面的抽象方法;
class C extends B{
	function say(){
		echo "我是子类里面重写抽象类B 里面的抽象方法say()";
	}	
}
$p1 = new C;
$p1->say();