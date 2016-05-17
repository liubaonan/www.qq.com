<?php
/*
	目录操作
	mkdir 
	
	images/日期/jpg/
	images
*/
include_once("../include/config.php");

echo WEBROOT;

$pathw = WEBROOT."/DIR/images/".date("Y")."/".date("m");
//mkdir($path,0777,true);

$path = WEBROOT."/DIR/A";
//rmdir($path);

//is_dir 检测是否为目录

var_dump(is_dir($path));

echo __FILE__;
var_dump(is_dir(__FILE__));

var_dump(is_dir($pathw));

echo "<hr />";

/*

file_exists
	检测目录或文件是否存在
*/
var_dump(file_exists(__FILE__));
var_dump(file_exists($pathw."/a.html"));
var_dump(file_exists($path));

 
echo "<hr />";
/*
	目录资源操作
*/

$dirPath = WEBROOT."/char";
$resouceDir = opendir($dirPath);	//读取目录资源

/*
while($file = readdir($resouceDir)){
	$path = $dirPath."/".$file;
	if(is_dir($path)){	
		if($file != "." && $file != "..")
			echo $file."为目录";
	}else{
		echo $file."<br />";

	}
}
*/
$dirPath = WEBROOT."/DIR/images";

function RecursiveDir($path){
	$resouceDir = opendir($path);	//读取目录资源
	while($file = readdir($resouceDir)){
		$realpath = $path."/".$file;
		if(is_dir($realpath)){	
			if($file != "." && $file != ".."){
				RecursiveDir($realpath);	
			}
		}else{
			echo $file."<br />";
		}
	}
}


RecursiveDir($dirPath);



/*
	mkdir
	rmdir
	
	is_dir
	file_exists

	opendir			dir(); object
	readdir			$dir->read();
	closedir		$dir->colose();
	
*/

$dirPath = WEBROOT."/DIR/images";
$fileArray = scandir($dirPath,1);

var_dump($fileArray);


/*
while($file = readdir($resouceDir)){
	$path = $dirPath."/".$file;
	if(is_dir($path)){	
		if($file != "." && $file != "..")
			echo $file."为目录";
	}else{
		echo $file."<br />";

	}
}
*/


$dir = dir($dirPath);
while($file = $dir->read()){
	var_dump($file);
}
$dir->close();


$dir = opendir($dirPath);
while($file = readdir($dir)){
	var_dump($file);
}
closedir($dir);



?>