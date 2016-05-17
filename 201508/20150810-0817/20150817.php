<?php
class Car{
	public $brand;			//汽车品牌
	public $displacement; 	//排量
	protected $type;			//类型	
	private $type100;
	
	public function __construct($brand,$displacement,$type){	
		$this->brand = $brand;
		$this->displacement = $displacement;
		$this->type = $type;	
	}	
	private function run(){
		return "这辆汽车是".$this->brand."排量是".$this->displacement."是什么类型".$this->type."<br />";
	}	
//获取run()里面的数据内容
	public function Show(){
		echo $this->run();	
	}	

	public function __set($name,$value){	
		$this->$name = $value."我利用魔术方法设置的";
	}	
	public function __get($name){		
		return $this->$name."<br/>.==我是调用的__get 魔术方法 出来的。";	
	}
}
$car = new Car("大众","2.0T","suv");
$car->Show();

$car->type = "无敌卡车";
$car->Show();

echo "<br />我要打印私有成员属性:".$car->type;


?>