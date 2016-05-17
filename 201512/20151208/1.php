<?php 

abstract class A{
	
	public $name;
	
	abstract function fun();
	
}

class B extends A{
	
	public function fun(){
		
	}
	
}

$a = 1.2;
$b = gettype($a);
$a = is_int($a);
var_dump($a);

echo "<br/>";

$liubei = '河北';
$laoda = 'liubei';
$paihang = 'laoda';
echo $$$paihang;

$a = -3;
$b = 10;
$c = $b%$a;
echo $c,'<br/>';

$a = 'asdff';
echo stripos($a,'a') !== true?'有':'没有';

$a = 30;
$b = 56;
$c = 8;
echo ($a>$b?$a:$b)>$c?($a>$b?$a:$b):$c;

define('LIU','刘宝南');

echo LIU;

$horse = false;
$car = true;
$i = 1;
if($horse && ($i=6)){
	
}
echo $i;

if($car || ($i=6)){
}
echo $i;

echo '<hr/>';
$a = 3;
$b = 5;
if($a=5 || $b=7){
	$a++;
	$b++;
}
echo $a,$b;


$a=2;
$b=5;
if(($a=3) && $b=2){
    $a++;
    $b++;
}

echo $a,'~~~',$b;  

echo '<hr/>';

echo 0x1c;

var_dump(hexdec(64));

//error_reporting(E_ALL);
function t(){
    echo '1';
    echo '2';
    echo '3';
    return  'hello';
    echo '4';
    echo '5';
    return   'study';
}
echo $a = t().'<br/>';

function tt($a){
	 $a +=1;
}
$b = 3;
tt($b);

echo $a;

function aa(){
	return 1+1;
}

function bb(){
	return 2+2;
}

function cc(){
	echo aa();
}
 cc();


var_dump(function_exists('fun'));
 

var_dump($_SERVER['SERVER_ADDR']);

$GLOBALS['var1'] = 5;
$var2 = 1;

function get_value(){
	global $var2;
	$var1 = 0;
	return $var2++;
}
echo get_value();
echo $var1;
echo $var2;

echo time();
echo '<br/>';
var_dump(microtime(true));//微秒时间戳

$start = microtime(true);
for($i = 1; $i<10000;$i++){
	$a = 122222/234;
}
$end = microtime(true);
echo $end - $start;
echo '<br/>';
echo date('Y-m-d 星期N H-i-s');
echo strtotime('now -1 day');
echo '<br/>';

$str = <<<LIU
slkfjla fsjalfksafjlkajflsd 
		asdf'
		 as
		df'
		af'
		sda'f
		sad'
		f'as
		f

LIU;
echo $str;
$str = '中国';
echo strlen($str); 
echo mb_strlen($str,'gbk');
echo '<hr/>';
$a = ['a','b','c'];
echo current($a);//当前的游标位置
echo next($a);
echo end($a);
echo prev($a);//将指针向前移动一位
reset($a);//将数组游标复位

$a = [1,2,1,12,1,2,12,2,1,2,12,1,21,2];
while ($b = current($a)) {
	echo $b.'<br/>';
	next($a);
}








?>














