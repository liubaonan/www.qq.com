<?php
include("include/config.ini.php");
include("include/comm.ini.php");
$pdo = new PDO($dsn,USER,PAS,$options);

if(isset($_POST['pid']) && isset($_POST['city']) && $_POST['city'] == 1){
	
	$pid = intval($_POST['pid']);
	$sql = "select * from city where parent_id =".$pid;
	$liu = $pdo->query($sql);
	$citys = $liu->fetchAll();
	$temp = "<option value=\"\">请选择城市</option>";
	foreach($citys as $t){
		$temp .= "<option value=\"".$t['region_id']."\">".$t['region_name']."</option>";
	}
	echo $temp;
}

if(isset($_POST['pid']) && isset($_POST['area']) && $_POST['area'] == 1){	
	$pid = intval($_POST['pid']);
	$sql = "select * from city where parent_id =".$pid;
	$liu = $pdo->query($sql);
	$citys = $liu->fetchAll();
	$temp = "<option value=\"\">请选择区域</option>";
	foreach($citys as $t){
		$temp .= "<option value=\"".$t['region_id']."\">".$t['region_name']."</option>";
	}
	echo $temp;
}
?>
