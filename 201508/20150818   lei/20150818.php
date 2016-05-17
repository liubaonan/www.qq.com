<?php
class A{
	public $a ;
	private $ap;	
	public $name ;

	public  function eat($money){
		echo "父类我有".$money."块钱";
	}
}
class B extends A{
	public $b;
	//public $a;	
	public function run(){	
		$this->eat(200);
		parent::eat(200);
		A::eat(200);	
	}	
	public function eat($money){
		echo "<br />我用".$money."块钱买了东西";
	}	
}
class C extends B{
	public function work($money){		
		A::eat($money);	
	}
}
$objectC = new C;
$objectC->work(200);


//$objectB = new B;

//$objectB->run();
//$objectB->eat(200);

/*
class C extends B{

	public $c;
	
	public function eat(){
		echo "我是".__CLASS__;
	}
	
}



$objectB = new B;
$objectB->a = "我是变量A";
echo $objectB->a;
echo $objectB->showName();

echo "<hr />";

$objectC = new C;
$objectC->a = "我是C 设置的A";
echo $objectC->a;
echo $objectC->run();

*/




