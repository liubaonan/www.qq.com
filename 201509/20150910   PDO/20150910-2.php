<?php
/*	
	PDO 预处理
*/
$dsn = "mysql:host=localhost;dbname=board";	//链接字符集
$options = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,//警告级别
	PDO::ATTR_CASE => PDO::CASE_LOWER,//列字符大小
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,		//设置检索返回类型
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8 "//设置连接字符集
];
$pdo = new PDO($dsn,'root','222',$options);

$name = "张三132";
$money = "500";

$sql = "insert into biao (`id`,`name`,`money`) values ('',:name,:money)";

$stsm = $pdo->prepare($sql);
$stsm->bindParam(':name',$name);
$stsm->bindParam(':money',$money);
$stsm->execute();



