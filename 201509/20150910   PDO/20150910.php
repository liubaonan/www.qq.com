<?php
/*

	PDO 链接
*/
/*
$dsn = "mysql:host=localhost;dbname=demo01";	//链接字符集
$options = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,//警告级别
	PDO::ATTR_CASE => PDO::CASE_LOWER,//列字符大小
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,		//设置检索返回类型
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8 "//设置连接字符集
];

$pdo = new PDO($dsn,'zhang','123',$options);

//$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_BOTH);

//查询数据
$sql = "select * from users";
$stmt = $pdo->query($sql);		//PDOstatment类型的对象
$result = $stmt->fetchAll();
//var_dump($result);


//CRUD

$sql = "insert into a values('','名字',100)";
$a = $pdo->exec($sql);
echo $a;
echo "最后插入的ID 是:".$pdo->lastInsertId('id'); 

//更新数据
$sql = "update a set `name`='名字2' where `id`=3";
$pdo->exec($sql);

//删除数据
$sql = "delete from a where id=3";
$pdo->exec($sql);

*/

$A=array("Monday","Tuesday",3=>"Wednesday"); 
echo $A[2];


