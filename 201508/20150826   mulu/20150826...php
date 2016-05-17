<?php






/*

echo __FILE__;
echo "<br/>";
echo dirname(__FILE__);
//D:\wamp\www\www.qq.com
echo "<br/>";
$liu= substr(dirname(__FILE__),0,-9);
echo $liu;
echo "<br/>";
//变成这样 D:/wamp/www/www.qq.com
$bao= str_replace("\\","/",substr(dirname(__FILE__),0,-9));
echo $bao;
//建立目录
$path=$bao.date("Y").date("m").date("d")."/"."image";
@mkdir($path,0777,true);
//删除目录
//rmdir($path);

//检测是否为目录
var_dump(is_dir(__FILE__));

var_dump(file_exists(__FILE__));


if(is_dir($bao)){
	echo "目录存在,亲";
}else{
	echo "目录不存在，亲";
}

echo "<br/>";

$lun=scandir($bao);
var_dump($lun);

$sen=opendir($bao);
var_dump($sen);

echo "<hr/>";

$zhou=readdir($sen);
var_dump($zhou);


echo  getcwd();
chdir($path);
echo "<br/>".getcwd();

var_dump(scandir($path));

echo "<hr/>";


*/



$size="a.txt";
$type="456.jpg";

$filesize=filesize($size);
var_dump($filesize);

$filetype=filetype($type);
var_dump($filetype);


$filetime=filemtime($type);
echo date("Y-m-d",$filetime);

$liu=fopen("c.txt","a+");
var_dump($liu);







echo getcwd();  //获取当前文件所在目录
echo "<br/>";
$liu= dirname(__FILE__);
$bao= str_replace("\\","/",substr(dirname(__FILE__),0,-9));
$a=scandir($liu);
var_dump($a);

echo( is_dir($liu));//判断是否是目录 与file_exists基本一样，但是is_dir效率快

echo file_exists($liu);//检测目录是否存在，也可以检测文件

echo "<br/>";
if(is_dir($liu)){
	
		if(opendir($liu)){
			echo "成功";
		}else{
			echo "失败";
		}
}else{
	echo '不是';
}
echo "<br/>";

$open= opendir($bao);

//closedir($open);//为什么什么也不输出？？？？？？？？？？？？？？？？？？？

$read= readdir($open);

echo "<br>";

while ($file = readdir($open)) {
	if($file!=="."&&$file!==".."){
			echo "$file.<br/>";
	}

}

echo "<hr/>";
$bao= str_replace("\\","/",substr(dirname(__FILE__),0,-9));
$ff=$bao."/"."liubaonan";
@mkdir($ff,0777);  

@rmdir( dirname(__FILE__) ."/"."amige");//删除目录

echo getcwd();//取得当前工作路径
/*
$ddd=opendir($bao);?????????????????????????????????????????????????????????

*/

var_dump(scandir($bao));

if(is_dir($liu)){
	$dir = dir($liu);

		while ($file = $dir->read()){
			echo $file."\n<br/>";
}
$dir->close();
	}
echo "<hr/>";


$den="sd.txt";

//$denden=fopen($den,"a");


//$hanle = fopen("fff.txt","w+");

//fwrite($hanle,"启奥");

//fclose($hanle);














