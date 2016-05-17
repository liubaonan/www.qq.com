<?php
$a = 300;
$b = 400;

$b = $a.'#'.$b;
$b = explode('#',$b);
var_dump($b);

$a = $b[1];
$b = $b[0];

echo $a.'<br/>',$b.'<br/>';



$a = 'liu bao nan cui yan wei';
$b = explode(' ',$a,3);//3表示该数组对多包含3个元素，第一个元素为liu ，第二个是bao，第三个是nan cui yan wei
$b = explode(' ',$a,-1);//-1表示最后输出少一个 元素，即wei消失；
var_dump($b);

$a = strtotime('2010-11-23 17:30');
$b = date('y年m月d日 h点iF',$a);
echo $b;

$pdo = new PDO("mysql:host=localhost;dbname=demo","root","");
$sql = "select * from ds_users";
//$result = $pdo->query($sql)->fetchAll();
//var_dump($result);
echo '<hr/>';

$a = true;
var_dump(gettype($a));

$a = 'liubaonan<br/>';
echo str_repeat($a,4);

define('LIU','男');//定义一个常量

echo LIU;

var_dump(defined('LIU'));//检测变量是否设置
$a = 'liu';

var_dump(isset($a));

unset($a);

$a = [1,2,3,4,5,'liu','bao','nan'];
var_dump($a);
echo implode('|',$a).'<BR/>';

echo $_SERVER['SERVER_ADDR'];
echo getenv('REMOTE_ADDR'),'<br/>';
echo gethostbyname('www.baidu.com');
//echo file_get_contents('http://www.baidu.com');//新闻抓取
/*$readcontents = fopen('http://www.baidu.com','rb');
$content = stream_get_contents($readcontents);
fclose($readcontents);
echo $content;*/
$a = [1,2,3,4,5,'liu','bao','nan'];
$b = array_unshift($a,0);
$b = array_shift($a);

$b = array_push($a,8,0,9);
$b = array_pop($a);
$a = 'liubaonan';
echo strtoupper($a);
echo strtolower($a);
echo  "&lt",'&gt';

$a = "<h1>刘宝南</h1>";
echo $a;
echo strip_tags($a),'<br/>';
echo md5('刘宝南');
echo "/zo{1,3}m/";
$a = 'how are you';
echo ucwords($a);
echo ucfirst($a);
echo strrev($a);
echo strlen($a);
echo substr($a,2,3);
echo strstr($a,'o');
echo strrchr($a,'o');
echo strpos($a,'o');
echo strrpos($a,'o'),'<br/>';
$a = '123456789';
echo str_replace('1','11111',$a);
$arr = [1,2,3,4,2,1,234,23,1,1];
var_dump($arr);
//var_dump(array_count_values($arr));
//var_dump(key($arr));
var_dump(array_flip($arr));
var_dump(array_rand($arr));
echo rand(11,112);
var_dump(array_values($arr));
var_dump(array_unique($arr));

$a = ['liu','bao','nan'];
list($cui,$yan,$wei) = $a;
echo "$cui $yan $wei";

$str = <<<LIU
GD库：是php中处理图片的扩展库，GD库中提供了一系列用来处理图片的API ，使用GD库可以处理图片或者生成图片；
	可以生成php报表、生成带有汉字的验证码、在网站上生成缩略图、给图片加水印……
	200:请求成功；404：没有找到；400：错误的请求；401：未被授权；403：不明原因的禁止；
	session 是储存用户访问的全局唯一变量，储存在服务器上的php指定目录中
	cookie：用来存储连续访问一个页面时所使用，是存储在客户端，
	php:php是一个基于服务器来创建动态网站的脚本语言，可以与HTML一起来生成网页主页。
	常量变量的区别：
		1.常量前面没有标记符号$
		2.定义方法不同：常量只能通过define来定义。变量时通过赋值来定义的
		3.常量不用考虑作用域问题。
		4.常量不能被重新定义，也不能被销毁。
		5.常量的值只能是标量
	函数的优越性：
		1.控制程序设计的复杂性
		2.提高软件的可靠性
		3.提高软件的开发效率
		4.提高软件的可维护性
		5.提高程序的重用性
	整型 字符串 布尔型 浮点型 数组 对象 资源 NULL 、
	
LIU;
echo $str;
/*imagecreate($width,$height);//创建一块画布，传入宽和高
imagecreatetruecolor();//创建一块画布，区别在于这个创建的画布支持的色彩更多，所以效果相对较好。
imagecreatefromjpeg();//创建一块画布，并将一个jpeg格式的图片读取到画布中
imagecreatefrompng();
imagecreatefromgif();*/
var_dump(gd_info());
var_dump(getimagesize('a.jpg'));
$tmp = 0 == 'a'?1:2;
echo $tmp;
echo date('Y-m-d H-i-s 星期N',strtotime('-1 days'));
echo '<hr/><hr/>';

$a = 'liu';
function fun(){
	define('SEN','我是刘宝南');
	echo SEN;	

}
fun();
//var_dump(get_defined_constants());
$a = '刘宝南';
$b = iconv('UTF-8','GBK',$a);
echo strlen($b);

echo constant('LIU');



function summmer($k){
    if($k == 1){
        return 1;
    }
     $s=$k+summmer($k-1);
     return $s;
}    
echo  summmer(95);       


$a = 'liu bao nan ';
$b = explode(' ',$a);
echo $b[0];

?>