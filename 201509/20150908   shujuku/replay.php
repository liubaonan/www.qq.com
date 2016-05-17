<?php
/*
											   _ooOoo_
											  o8888888o
											  88" . "88
											  (| -_- |)
											  O\  =  /O
										   ____/`---'\____
										 .'  \\|     |//  `.
										/  \\|||  :  |||//  \
									   /  _||||| -:- |||||-  \
									   |   | \\\  -  /// |   |
									   | \_|  ''\---/''  |   |
									   \  .-\__  `-`  ___/-. /
									 ___`. .'  /--.--\  `. . __
								  ."" '<  `.___\_<|>_/___.'  >'"".
								 | | :  `- \`.;`\ _ /`;.`/ - ` : | |
								 \  \ `-.   \_ __\ /__ _/   .-` /  /
							======`-.____`-.___\_____/___.-`____.-'======
											   `=---='
							^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
									   佛祖保佑       永无BUG
*/


include_once("./include/config.ini.php");//网站配置文件
include_once(WEBROOT."/include/comm.ini.php");	//数据库配置文件
//如果是插入提交内容 这里处理
if(isset($_POST['action']) && $_POST['action'] == 1){
	$link = mysql_connect(HOST,USER,PAS);
	mysql_query("SET NAMES ".CHAR);
	mysql_select_db(DB);//选择数据库	
	$mid = $_POST['mid'];
	$uid = $_POST['uid'];
	$content = htmlspecialchars(trim($_POST['content']));
	$stat = 1;
	$ip = $_SERVER['REMOTE_ADDR'];	
	$sql = "insert into message_replay values('','".$mid."','".$uid."','".$content."',NOW(),'".$stat."','".$ip."')";	
	if(mysql_query($sql))
		exit("<script>alert(\"回复成功!\");window.location.href=\"indexx...php\";</script>");
	else
		exit("<script>alert(\"回复失败!\");window.history.go(-1);</script>");		
}
if(!isset($_GET['mid']))
	exit("<script>alert(\"请正确输入网址\");window.history.go(-1);</script>");
$mid = intval($_GET['mid']);	//针对那一条进行回复	
?>
<form action="./replay.php" method="POST" >
	回复的内容:<textarea name="content" id="textarea" cols="45" rows="5"></textarea><br />
				<input type="hidden" value="1" name="action" />
			    <input type="hidden" value="<?= $_SESSION['uid'] ?>" name="uid" />
				<input type="hidden" value="<?= $mid ?>" name="mid" />
				<input type="submit" value="回复"  />
</form>