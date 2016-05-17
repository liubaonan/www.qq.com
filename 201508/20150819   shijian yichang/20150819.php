<?php
/*
	面向对象
		万事万物皆对象，对象都包含属性，行为
		
	面向对象三大特征
		封装、继承、多态
		
	优势
		更好的服务于开发大型项目,使结构更合理
		易于维护
		简化代码
		提高效率		
		unserialize //反序列化
		serialize // 序列化
*/
/*
用final 修饰的类 不能被子类继承
	abstract class 修饰一个类 说明这个类是抽象类
		要实例化抽象类 必须被继承以后才能实例化
	抽象类里面不一定有抽想法
	有抽象方法的类一定是抽象类
*/
abstract class A{						
	public 	 	$a;		//作用范围 同一类 子类 类的外部
	private 	$b;		//同一类
	protected 	$c;		//同一类 子类
	
	public static $d;
	const  TYPE = 1;	//常量关键字 允许范围 为4种标量类型
	
	
	public function __construct($a){		//构造方法 ，进行类属性的初始化
	
		$this->a = $a;		//$this 指的是本类实例化后的对象		
	}
	public static function eat(){			//静态的成员方法	
	
	}	
	public function work(){				//普通的成员方法
		
		echo "我是父类里面的work";		
	}	
	final public function run(){		//final 可以修饰成员方法及类 	子类里面不能被重写final 修饰的成员方法
	}	
	abstract function teaching();		//抽象方法
	//魔术方法 __set  __get  toString() __clone();
	public function __destruct(){		//析构方法，在对象销毁后执行的魔术方法	
	}
}

//子类 如果继承抽象类 必须要重写抽象类里面的 抽象方法
/*
	子类继承父类了除 private 修饰的属性及方法

*/
class B extends A implements IA,IB{
	//方法的重写，跟父类的方法名及参数一直的方法 叫方法重写
	function teaching(){		
		//调用静态方法
		self::eat();	//调用的是静态的方法
		self::$d;		//调用静态属性
		A::TYPE;		//调用常量		
	}
	//重写方法work
	public function work(){
		parent::work();	//调用父类里面的成员方法
	
	}	
	//重写接口里面所有的抽象方法;	
	function one(){}
	function two(){}
	function three(){}
	function four(){}
}
/*
	类的外部
*/ 
$p1 = new B(1);
A::eat();
B::eat();
$p1::eat();

A::$d;
B::$d;
$p1::$d;
A::TYPE;
/*
	interface 
	//接口是一个特殊的抽象类
	//接口里面全是抽象方法	
*/
interface IA{
	function one();
	function two();
}
interface IB{
	function three();
	function four();
}
  