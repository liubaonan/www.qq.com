<?php

function Person($a,$b,$c){
	
	$max = ($a>$b?$a:$b)>$c?($a>$b?$a:$b):$c;
	
	return $max;
}
echo Person(100,20,3);

echo $_SERVER['REMOTE_ADDR'];
echo gethostbyname('www.baidu.com');
echo getcwd();
//var_dump($_SERVER);
echo $_SERVER['QUERY_STRING'];
echo $_SERVER['DOCUMENT_ROOT'];
echo '<hr/>';

function my_scandir($dir){
	$files=array();
	if(is_dir($dir)){
		if($handle=opendir($dir)){
			while(($file=readdir($handle))!==false){
				if($file!="." && $file!=".."){
					if(is_dir($dir."/".$file))
							$files[$file]=my_scandir($dir."/".$file);
					else
						$files[]=$dir."/".$file;
				}
			}
			closedir($handle);
			return $files;
		}
	}
}
//var_dump(my_scandir($_SERVER['DOCUMENT_ROOT']));


function liu($dir){
	$files = [];
	if(is_dir($dir)){
		if($handle = opendir($dir)){
			while(($file = readdir($handle)) !==false){
				if($file != '.' && $file != '..'){
					if(is_dir($dir."/".$file))
						$files[$file]=scandir($dir."/".$file);
					else 
						$files[] = $dir."/".$file;
				}
			}	
			closedir($handle);
			return $files;
		}
	}
}
//var_dump(liu($_SERVER['DOCUMENT_ROOT']));



'/^[\w.]+@([\w.]+)\.[a-z]{2,6}$/i';
$a = '/^\w+.\w+@\w+.[a-z]{2,6}$/i';
$b = 'www.liubaonan@qq.com';
if(preg_match($a,$b))
	echo "ok";
else 
	echo "sorry";
echo '<hr/>';
$a = parse_url('http://localhost/www.qq.com/201601/20160121/1.php?r=3');
$b = basename($a['path']);
echo $b,'<br/>';

$a = 'http://localhost/www.qq.com/201601/20160121/1.php?r=3';
$b = basename($a);
$c = explode('?',$b);
echo $c[0];

echo $_SERVER['REQUEST_URI'];

/**
 * 遍历文件夹下的所有文件
 */
function bao($dir){
	$files = [];
	if(is_dir($dir)){
		if($handler = opendir($dir)){
			while(($file = readdir($handler)) !=false){
				if($file!='.' && $file!='..'){
					if(is_dir($dir.'/'.$file))
						$files[$file] = scandir($dir.'/'.$file);
					else 
						$files[] = $dir.'/'.$file;
				}
			}
		}
		closedir($handler);
		return $files;
	}
}
//var_dump(bao($_SERVER['DOCUMENT_ROOT']));

$a = $_SERVER['DOCUMENT_ROOT'];
var_dump(scandir($a));

$a = true;
echo ++$a.'<br/>';

$a = "15abc";
$b = 5;
$c = $a+$b;
echo $c;

$var = FALSE;
if (empty($var)){
	echo"null";
}else{
	echo"have value";
}
/* $str = “LAMP”;
$str1 = “LAMPBrother”;
$strc = strcmp($str,$str1);
switch ($strc){
	case 1:
		echo“str > str1”;
		break;
		case –1:
		echo“str < str1”;
	break;
	case 0:
	echo“str=str1”;
	break;
	default:
	echo“str <> str1”;
}
 */
echo '<hr/>';
$a = 'liubaonanliub';
$b = 'liubaonandfhdfg';
$c = strcmp($a,$b);
echo $c,'<hr/>';


/* function p(){
	return 1;
}
if (p()){
	echo“false”;
}else{
echo“true”;
}
 */

class A{
	public $num=100;
}
$a = new A();
$b = $a;
$a->num=200;
echo $b->num;

ECHO '<HR/>';

class foo {
    function name()
    {
        echo "My name is " , get_class($this) , "\n";
    }
}
$bar = new foo();
echo get_class($bar) ;

