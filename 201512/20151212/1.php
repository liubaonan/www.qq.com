<?php

$a = [1,2,3,4,5];
var_dump($a);


$a = [
		'学森',
		2,
		'liu'=>'宝南'
	];
var_dump($a);

$a = 3;
var_dump('liu');

echo microtime(true);
echo '<br/>';
echo mktime(22,05,22,12,12,2015);
echo '<br/>';
echo time();
echo '<br/>';
echo strtotime('now');
$a = 3;
$b = 4;
if($a = 0 || $b = 6){
	$a++;
	$b++;
}
echo $a,$b;
echo '<hr/>';

//header("content-type:text/html;charset=utf-8");
function str_rev_gb($str){
	//判断输入的是不是utf8类型的字符，否则退出
	if(!is_string($str) || ! mb_check_encoding($str,'UTF-8')){
		echo ("输入类型不是UTF8类型的字符串");
	}
	$array=array();    //将字符串存入数组
	$l=mb_strlen($str,'UTF-8');
	for($i=0;$i<$l;$i++){
		$array[]=mb_substr($str,$i,1,'UTF-8');
	}
	//反转字符串
	krsort($array);
	//拼接字符串
	$string=implode($array);
	return $string;
}
$str =123;
echo str_rev_gb($str);



echo '<hr/>';
echo 'd';

var_dump($_SERVER['DOCUMENT_ROOT']);

var_dump(iconv_get_encoding());










?>