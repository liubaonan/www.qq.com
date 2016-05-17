<?php
/* //递归小实例
function fun($m){
	echo $m." ";
	if($m>1){
		fun($m-1);
		}	
	echo $m." ";
}
fun(10);
//回调函数
 */
/* function liu($a,$b,$check){
	for($i=$a;$i<$b;$i++){
		if($check($i)){
			echo $i.'<br/>';
		}
	}	
}

function text($sum){
	if($sum>0)
		return false;
	else
		return true;
}
liu(-55,150,"text"); 
*/
/* function fun($a){
	echo $a;
}
fun(1);
 */

/* function foo(){
	static $a;
	$a++;
	echo $a.'<br/>';
	unset($a);
}
foo();
foo();
foo(); */

//抽象类、抽象方法
/* abstract class Person{	
	abstract function fun();	
	abstract function run();		
}
class son extends Person{
	function fun(){
		
	}
	function run(){
		
	}
}
$liu = new son(); */


//棋盘
/* 	for($i=0;$i<2000;$i++){
	
		echo  $a="<div style=\"width:40px;height:40px;background:gray;float:left;border:1px solid white\"></div>";
				
	}

 */
/* 
echo getcwd().'<BR/>';
echo dirname(__FILE__);
echo '<br/>';
$a = substr(dirname(__FILE__),0,-21);
echo $a.'<br/>';
echo str_replace('\\','/',$a);
echo str_repeat($a.'<br/>',4); */
//var_dump(get_defined_constants());

/* $arr = [
	1=>'nan',
	'liu'=>[1,2,3,4,5,6],
	'bao'
	
];
var_dump($arr);

$people=[
	"老大"=>['堡垒','宝恒','兴业','博宇'],
	"老四"=>['柳丹','刘乐','宝应','小宇'],
	"老二",
	"老三",
];

$temp = "";
	foreach($people as $key=>$v){
		if(is_string($key)){
			$temp.=$key."家里有:".implode(" ",$v)."<br/>";
		}else{
			$temp.=$v."<br/>";
		}
	}
echo $temp;

 */


/* $arr = [1,2,3,4,5,6];

var_dump(in_array(11,$arr));


echo round(3.1);
echo "<br/>";
function fun($a,$b){
	//$c = "";
	$c = $a+$b;
	echo $c;
}
 fun(4,4);


 */

/* $a = fopen('liu.txt','a');

var_dump(file_exists('liu.txt'));
var_dump(is_dir('lib'));
var_dump(opendir('lib'));

$b = __DIR__;


$a = opendir($b);
if($a){
	echo "lib下的文件有：<br/>";
	while($file=readdir($a)){
		if($file!='.' && $file!='..')
		echo $file."<br/>";
	}
	closedir($a);
}

 */


/* $c=__DIR__;
$s= opendir($c);//打开一个目录句柄
echo "<br/>";   
//echo readdir($s);//读取目录句柄
echo "<hr/>";
if($s){
	echo $c."下的文件有:<br/>";
	while($file=readdir($s)){
		if($file!="." && $file!="..")
		echo $file."<br/>";
	}
} */



















?>