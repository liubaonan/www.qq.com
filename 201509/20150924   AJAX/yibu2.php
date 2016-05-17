<?php
include("include/config.ini.php");
include("include/comm.ini.php");
$pdo = new PDO($dsn,USER,PAS,$options);
sleep(1);

if(isset($_POST['action']) && $_POST['action'] == 'ajax'){
	
	$name = $_POST['name'];
	if(empty($name)){
		echo "用户名不能为空";
	}else{
		$sql = "select * from users where `username` ='".$name."'";
		$liu=$pdo->query($sql);
		$bao=$liu->fetchAll();
		if($bao){
			echo "恭喜您，成功啦";
		}else{
			echo "祝贺您，又一次失败";
		}
	}
}
?>