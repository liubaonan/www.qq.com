<?php

//预处理

$dsn="mysql:host=localhost;dbname=students";
$options = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,//警告级别
	PDO::ATTR_CASE => PDO::CASE_LOWER,//列字符大小
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,		//设置检索返回类型
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8 "//设置连接字符集
];
$pdo=new PDO($dsn,'root','222',$options);

$name = "张三";
$money = "500";

$sql = "insert into biao (`id`,`name`,`money`) values ('',:name,:money)";

$stsm = $pdo->prepare($sql);
$stsm->bindParam(':name',$name);
$stsm->bindParam(':money',500);


$stsm->execute();

/*
$pdo=new PDO($dsn,'root','222',$options);

$name="周杰棍";
$money="100";

$sql="insert into biao (`id`,`name`,`money`) values ('',:name,:money)" ;

$liu=$pdo->prepare($sql);
$liu->bindParam(':name',$name);
$liu->bindParam(':money',500);

$liu->execute();
*/

















/*
$sql="select * from biao";
$stmt=$pdo->query($sql);
$result=$stmt->fetchAll();
var_dump($result);

$sql="insert into biao values('','王五',300)";
//$liu=$pdo->exec($sql);
echo $liu;
echo "最后插入的id是：".$pdo->lastInsertId('id');


$sql="update biao set `name`='南锅锅' where `name`='李四' ";
$liu=$pdo->exec($sql);

$sql="delete from biao where `name`='王五' ";
$liu=$pdo->exec($sql);
*/























