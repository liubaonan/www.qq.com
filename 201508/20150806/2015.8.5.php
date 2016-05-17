<?php
function one($num){
	echo $num;
	echo "<-->";
}
function two($num){
	echo $num;
	one($num-1);
	echo "&nbsp;我不做大哥多少年?&nbsp;$num";
}
function three($num){
	echo $num;
	two($num-1);
	echo "&nbsp;&nbsp;&nbsp;我不做大哥多少年?&nbsp;$num";
}
function four($num){
	echo $num;
	three($num-1);
	echo "&nbsp;&nbsp;我不做大哥多少年？&nbsp;$num";
}
four(5);
echo "<hr/>";
$sort=[
		['id'=>1,'name'=>'新闻','pid'=>0],
		['id'=>3,'name'=>'体育','pid'=>1],
		['id'=>6,'name'=>'足球','pid'=>3],
		['id'=>4,'name'=>'军事','pid'=>1],
		['id'=>5,'name'=>'篮球','pid'=>3],
		['id'=>7,'name'=>'甲联','pid'=>6],
		['id'=>8,'name'=>'游戏','pid'=>0],
		['id'=>2,'name'=>'娱乐','pid'=>1],
		['id'=>9,'name'=>'飞车','pid'=>8],
		['id'=>10,'name'=>'战争','pid'=>4],
		['id'=>11,'name'=>'抗日','pid'=>10],
];
function getSort($sort,$pid=0,$lenth=0,$html="--"){
	static $temparr=[];
	foreach($sort as $v){
			if($v['pid']==$pid){
				$v['html']=str_repeat($html,$lenth);
				$temparr[]=$v;		
				getSort($sort,$v['id'],$lenth+1);			
			}
		}
		return $temparr;
}
$temparr=getSort($sort,0,0);
var_dump($temparr);

function foo($n){
	if($n>4){
		echo "猜猜我是几？".$n."<br />";
	}else{
		echo $n++."<br />";
		foo($n);
	}
	}
foo(1);
echo "<hr/>";	
function  liu($n){
		if($n<10){
			echo "我是$n"."<br/>";
			$n++;
			liu($n);
		}else{
			echo "我是最帅的 ou ye!".$n;			
	}
}
liu(4);
echo "<br/>";
 function test($i){ 
			$i-=4; 
			if($i<3){ 
				return $i; 
		}	else{ 
		
		return test($i); 
} 
	} 
echo test(30); 

echo "<hr/>";

function sum($count){
	if($count!=0){
		return $count+sum($count-1);
	}else{
		echo "终止咯！";
	}
}
$haha = sum(10);
print "Summation = $haha";

$array=array(0=>"刘宝南","六百恒","哈哈哈");

var_dump($array);
$a=[5=>"启奥","科技","实训"];
var_dump($a);
$array=array(1,2,3,4,5,6);
var_dump($a);



?>