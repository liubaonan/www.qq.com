<?php
class Foo
{
	public static $my_static = 'foo';

	public function staticValue() {
		return self::$my_static;
	}
}

class Bar extends Foo
{
	public function fooStatic() {
		return parent::$my_static;
	}
}


print Foo::$my_static . "\n";

$foo = new Foo();
print $foo->staticValue() . "\n";
//print $foo->my_static . "\n";      // 报错，静态属性不可以由对象通过 -> 操作符来访问。

print $foo::$my_static . "\n";
$classname = 'Foo';
print $classname::$my_static . "\n"; // As of PHP 5.3.0

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";


$A="Hello";
function print_A() {
	$A= "php mysql !!";
	global$A;
	echo$A;
}
echo $A;
print_A();

$var1 = 1;
$var2 = 2;
function test_global()
{
	global $var1,$var2;
	$var1=&$var2;
	$var1=7;
}
test_global();
echo $var1;//1
echo $var2;//7

$s1 = 'd';
$s2 = 'k';
echo "{$s1}{$s2}";

$x=array("aaa","","ccc","ddd","");
$y=array_unique($x);
echo count($x) . "," . count($y);



$x=array(1,3,2,3,7,8,9,7,3);
$y=array_count_values($x);
var_dump($y);

function total_Sum($a,$c=5, $b=3){
	echo $a."+ ".$b." + ".$c." = ".($a+$b+$c) ;
}
total_Sum(1);
echo $_SERVER['SERVER_NAME'];

$x=1;            //这一步声明了变量x，并对其赋值为1;
++$x;            //使用了前++运算符，先对自身+1，再进行运算，$x的值为2；
$y=$x++;      //使用了后++运算，先把$x的值赋给$y,再对自身+1，$y为2，$x为3.

$x=dir(".");
while($y=$x->read())
{
	echo $y;
}
$x->close();
echo '<br/>';

$a="hello";
function p(){
	global $a;
	$a="phper";
}
echo $a;
p();
echo $a;

$array= array('1','1',4);
foreach($array as $k=>&$v){
	$v= 2;
}

var_dump($array);

echo  $rest = substr("abcdef", -1);


echo '<hr/>';
$a = 'www.baidu.com';
$b = explode('.',$a);
var_dump($b);
$url = ' http://www.sina.com.cn/abc/de/fg.php?id=1';
$c = basename($url);
$d = explode('.',$c);
var_dump($d);

echo mktime(2,23,25,1,23,2015);
echo '<br/>',microtime();

?>

<script language="javascript">

  function hello(i){ 
		document.write("大家好<br>");
		 if(i < 5) {
    	  hello(++i);
 		}
 }
hello(1);


</script>

<?php 
$a = 'liudp';
$b = 'liudqe';
echo strcmp($a,$b);


?>



















