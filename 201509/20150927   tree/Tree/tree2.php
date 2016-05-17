<?php
	$dsn = "mysql:host=localhost;dbname=students";			//链接字符集
	$options = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,				//警告级别
		PDO::ATTR_CASE => PDO::CASE_LOWER,						//列字符大小
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,		//设置检索返回类型
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".'utf8'		//设置连接字符集
	];

//include_once("include/config.ini.php");
//include_once("include/comm.ini.php");
$pdo = new PDO($dsn,'root','',$options);
$sql = "select * from city ";
$stmt = $pdo->query($sql);
$arr = $stmt->fetchAll();

$citys =[];	
foreach($arr as $t){
$citys[] = [
	'id'=>$t['region_id'],
	'pId'=>$t['parent_id'],
	'name'=>$t['region_name']
	];	
}

echo json_encode($citys);