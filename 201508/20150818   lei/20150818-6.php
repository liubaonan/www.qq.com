<?php
//接口	interface  只能拥有抽象方法，所以可以理解为接口是特殊的抽象类
//定义一个接口A
interface A{
	 const A_NAME = "建筑设计院";	 
	 function say();
	 function work();
}
interface B{
	const B_NAME = "消防部门";	
	function outfire();	
}
//	自己的规范
abstract class my{
		public $name;	//单位名称	
		function __construct($name){			
			$this->name = $name;		
		}	
		abstract function teaching();	//功能				
		function working(){		
			echo $this->name."我在这里办公<br />";
		}
}
//实现接口
class C extends my implements A,B{
	function say(){	
		echo A::A_NAME."对我们的要求很严格<br />";		
	}	
	function work(){	
		echo A::A_NAME."要求我们尽快完工<br />";
	}	
	function outfire(){		
		echo B::B_NAME."注意生产安全<br />";	
	}	
	function teaching(){	
		echo $this->name."我在这里教学<br />";
	}
}
$p1 = new C("启奥");
$p1->say();
$p1->work();
$p1->outfire();
$p1->teaching();
$p1->working();
