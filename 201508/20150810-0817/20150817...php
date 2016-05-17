<?php

class Person{	
	var $name;
	var $age;
	var $height;
	function __construct($name="",$age="",$height=""){
			$this->name=$name;
			$this->age=$age;
			$this->height=$height;
	}	
	private function fun(){
		echo "他的名字是:".$this->name."&nbsp今年".$this->age."岁"."&nbsp"."身高是：".$this->height."<br>";
	}
	public function setheight($name){
		$this->name=$name;  //只改变fun()属性当中的一个或几个值，其余值不变照样输出。

	}
	function show(){  //因为fun()属性被定义为私有成员，不能被外部使用，所以重新定义一个shou，从而间接调取fun();
		echo $this->fun();
	}
}
$liu=new Person("刘宝南","22","177");
$liu->show();
$liu-> setheight("宝宝");
$liu->show();
$liu->setheight("刘晓森");
$liu->show();
$liu->name="宝宝";
$liu->show();

echo "<hr/>";
class Pelple{
	var $nan;
	var $nv;
	
	 function __construct($nan,$nv){
		$this->nan=$nan;
		$this->nv=$nv;
	}
	private function wan(){
		echo "php班".$this->nan."多于".$this->nv."<br/>";
	}
	public function haha(){
		echo $this->wan();
	}
	public function typenan($nan,$nv){
		$this->nan=$nan;
		$this->nv=$nv;
	}
	
}
$sen=new Pelple("男生","女生");
$sen->haha();
$sen->typenan("学生","老师");
$sen->haha();

echo "<hr/>";



/*
	数据？条 一共？页  首页  上一页  当前页1  1 2 3 4 5 下一页 尾页 

class $fenye{
	var $page;//当前页
	var $total;//总页
	var $number;
	var $firstpage;//第一页
	var $prepage;//上一页
	var $nexpage;//下一页
	var $maxpage;//最大页面数
	var $minpage;//最小页面数
	var $pageStr;
	public function __construct($total,$pageStr="page"){
		$this->pageStr=$pageStr;
		$total->total=$total;
		$maxpage-maxpage=ceil($this->$total/$this->$number);
		$this->page=isset($_GET[$this->pageStr])?intval($_GET[$this->pageStr]):1;
		
		if($this->page>$this->maxpage)
			$this->page=$this->maxpage;
	}
		function total(){
			return "数据共".$this->total."条";
		}
		function totalpage(){
			return "一共".$this->maxpage."页";
		}
		function showindexpage(){
			if($this->page !=1)
			return "<a href=\"?\".$this->pageStr.\"=1\">首页</a>";
		}
		function prepage(){
			$page=$this->page-1;
			if($this->page !=1)
			return "<a href=\"?".$this->pageStr."=".$page."\">上一页</a>";
		}
		function currntpage(){
			return 
		}
		
}	
}
*/


















