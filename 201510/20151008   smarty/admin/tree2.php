<?php

include_once("include/config.ini.php");
include_once("include/comm.ini.php");
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