<?php


function minheight($minheight=50){
	echo "高度是: $minheight <br/>";
}

minheight(444);
minheight();
minheight(300);

function sum ($b,$c){
	$a=$b+$c;
	return $a;
}
echo "3+2=".sum(3,2)."<br/>";
echo sum(7,6);


$a=100;
function fun(&$a){
	$a=888;
	
}
fun($a);
echo $a;


echo $a;



function text(){
	static $b=0;
	echo $b;
	$b++;
}
text();
text();
echo "<hr/>";
 $a = 10;
$b = 20;

function _test(&$a,$b){
			$a +=$b;
			$b++;
}
		_test($a,$b);

echo $a."<br />";	
echo $b;

/*
	作业 书写一个 可以输入任意多个参数的函数 并把参数 拼接返回
	getString("1","2","100");
*/
echo "<hr/>";
function liu(){
			$list=func_num_args();
			echo "排序的个数:".$list."<br/>";
			$num=func_get_args();
		for($i=$list-1;$i>1;$i--){
			for($j=1;$j<$i;$j++){
				if($num[$j]>$num[$j+1]){
					$bao=$num[$j];
					$num[$j]=$num[$j+1];
					$num[$j+1]=$bao;
			}
				
		}
	}
				var_dump($num);
}
liu(1,5,32,86,48,95,155,94,95,6,87,80,0);
echo "<hr/>";





















