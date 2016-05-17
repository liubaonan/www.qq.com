<?php

$a = date('Y-m-d h:i:s',strtotime('-30 days'));
var_dump($a);

echo count("abc");




echo "<hr/>";

$a = 'dskdjflk';
$b = 'sdkfjskfSDFSDFSDFq';
$c = 'i an liubaonan';
echo strtoupper($a);
echo strtolower($b);
echo ucfirst($a);
echo ucwords($c);echo '<br/>';
$a = ['a','b','c'];
echo implode($a);
echo '<hr/>';
$a = 'sls';


echo str_pad($a,30,'d');

echo "<hr/>";

/* $a = __FILE__;
echo $a,'<br/>';
echo basename($a); //获取路径的文件名
echo dirname($a);  //获取路径的目录
var_dump(pathinfo($a));//获取关于路径的信息
echo realpath($a);  //等价于__FILE__
*/

echo __FILE__,'<br/>';  //绝对路径
echo __DIR__,'<br/>';	//目录
echo __LINE__;	//代码所在行
//var_dump($_SERVER);
echo $_SERVER['REQUEST_URI'];

echo date('Y-m-d h:i:s --l',strtotime('-2 days')),'<br/>';


$a = __FILE__;
$b = substr($a,0,11);
$c = scandir($b);
$d = array_shift($c);
$d = array_shift($c);
//echo implode($c,'<br/>');

$a = 'a123akj123kaj123lkj123lak1j123';
echo substr_count($a,'123');		//计算123出现的次数
$b = str_split($a);					//将字符串分割成数组
$c = array_keys($b,'a');			//返回数组中的键名
echo '<br/>',implode($c,'<br/>');
echo '<hr/>';

function sub($liu,$bao){
	$b = str_split($liu);
	$c = array_keys($b,$bao);
	$d = implode($c,'<br/>');
	return $d;
}
echo sub('alskdfladfhjknafjlasjdfl','a');
echo "<hr/>";
$a = 1234567890;
$a = str_split($a);
array_splice($a,1,0,',');
array_splice($a,5,0,',');
array_splice($a,9,0,',');
array_splice($a,13,0,',');
echo implode($a);

$a = 'liubaonan';
echo strrev($a);
echo '<br/>';
$a = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
$b = array_rand($a);
$c = array_splice($a,$b-1,1);
for($i=0;$i<6;$i++){
	$b = array_rand($a);
	$c = array_splice($a,$b-1,1);
	echo $b,'<br/>';
}

echo '<br/>';
//2013-2-5 ~ 2013-3-6
$a = strtotime('2013-3-6');
$b = strtotime('2013-2-5');
$c = ceil(($a-$b)/(24*60*60));
echo $c,'<br/>';
$a = [1,2,3,4,5,6];
$b = ['liu','bao','nan'];
$c = array_merge($a,$b);
var_dump($c);
var_dump($_SERVER);












