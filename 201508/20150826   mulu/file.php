<?php

include_once("../include/config.php");

/*

	文件操作 
	fopen()
	filesize();	文件的大小



$txt = "a.txt";
$jpg = "381029961.jpg";

$handle = fopen("381029961.jpg","wb+");

var_dump($handle);

$size = filesize("381029961.jpg");

var_dump($size);

$type = filetype($jpg);

var_dump($type);

//文件修改的的时间
$time = filemtime($jpg);
echo date("Y-m-d H:i:s",$time);
echo "<br />";
//文件访问的时间
$atime = fileatime($jpg);
echo date("Y-m-d H:i:s",$atime);

//获取文件访问的权限

$perms = fileperms($jpg);

var_dump($perms);


echo "<hr />";

$url = "http://www.baidu.com";
$bd = fopen($url,"r");

var_dump($bd);

//文件信息

var_dump(stat("a.jpg"));

*/

$txt = "a.txt";
$handle = fopen($txt,"a+");
$size = filesize($txt);
//fread();	读取资源里面的数据
$string = fread($handle,12);
echo $string;


$url = "http://www.baidu.com";
$handle = fopen($url,"r");

//feof 代表的是指针如果只想了文件的末尾 会返回TRUE;
$string = "";
while(!feof($handle)){
	$string .= fread($handle,1024);
}

//echo $string;


$file = "b.txt";
$handle = fopen($file,"a+");
var_dump(feof($handle));

//字符串的写入
$wStr = "启奥科技";
$hanle = fopen("b.txt","w+");
var_dump(feof($hanle));
fwrite($hanle,$wStr);
fclose($hanle);

/*
file_get_contents();		//直接把所有的资源读取到内存当中备用
fread()						//是按照指针的位置 按需所取。
*/


//删除文件
//unlink("c.txt");

//拷贝文件
copy("a.txt","a1.txt");

//文件名重命名
rename("a1.txt","a1a.txt");

//拷贝文件到指定目录

$src_file = "a1a.txt";
$dst_dir = WEBROOT."/DIR/images/2015/08/".$src_file;

echo $dst_dir;
copy("a1a.txt",$dst_dir);

$dst_path = WEBROOT."/DIR/file/2015";		//一开始不存在
$dst_file = $dst_path."/c.txt";

if(!file_exists($dst_path))
	mkdir($dst_path,777,true);
copy("a1a.txt",$dst_file );

copy($dst_path."/c.txt",$dst_path."/d.txt");

unlink($dst_path."/d.txt");







