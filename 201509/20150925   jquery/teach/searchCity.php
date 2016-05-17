<?php

include("include/config.ini.php");
include(WEBROOT."/include/comm.ini.php");


if(isset($_GET['term']) && !empty($_GET['term'])){
	$key = trim($_GET['term']);
	$pdo = new PDO($dsn,USER,PAS,$options);
	$sql = "select * from city where region_name like '%".$key."%'";
	$stmt = $pdo->query($sql);
	$citys = $stmt->fetchAll();
	foreach($citys as $c){
		$temp[] = $c['region_name'];
	}
	echo json_encode($temp,true);
}


