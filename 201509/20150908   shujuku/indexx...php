﻿<?php
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


/*
	所有留言的信息
*/
include_once("./include/config.ini.php");//网站配置文件
include_once(WEBROOT."/include/comm.ini.php");	//数据库配置文件
include_once(WEBROOT."/class/page.class.php");

//权限判断
if(!isset($_SESSION['islogin']) && $_SESSION['islogin'] !=1)
	exit("<script>alert(\"请登录后操作\");window.location.href=\"login.php\";</script>");

echo "欢迎您：".$_SESSION['name']."先生<br/>";
echo "<a href=\"login.php?action=loginout\">退出</a>";
echo "<hr/>";

$link = mysql_connect(HOST,USER,PAS);
mysql_query("SET NAMES ".CHAR);
mysql_select_db(DB);//选择数据库

$page = isset($_GET['page'])?intval($_GET['page']):1;
$start = ($page -1)*$web['pagenumber'];

$sql = "select * from message order by mid desc limit ".$start.",".$web['pagenumber'];
$result = mysql_query($sql);

$temp = "";
while($arr = mysql_fetch_array($result,MYSQL_ASSOC)){//关联 键值为字符串
	
	$temp .= "<table width=\"700\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\"><tr>";
	$temp .= "<td>ID</td><td>标题：".$arr['title']."</td><td>发布时间：".$arr['createdate']."</td><td><a href=\"./replay.php?mid=".$arr['mid']."\">回复</a></td>";
	$temp .= "<tr><td>".$arr['mid']."</td><td colspan=\"3\">".htmlspecialchars_decode($arr['message'])."</td></tr>";
	//回复的内容
	$temp .= getReplayMessage($arr['mid']);	
	$temp .= "</table>";
}
echo $temp ;
//计算数据总数

$sql = "select count(`mid`) as total from message";
$totalResult = mysql_query($sql);
$arr = mysql_fetch_array($totalResult);
$total = $arr['total'];

$page = new page($total,'page',$web['pagenumber']);
?>
<table width="700" border="1">
  <tr>
    <td><?= $page->show();?>
</td>
  </tr>
</table>
<?php
mysql_close($link);
function getReplayMessage($mid){
	global $link;
	$sql = "select a.*,b.* from message_replay as a ,users as b where a.mid=".$mid." and a.uid=b.uid order by a.id desc";
	$result = mysql_query($sql,$link);
	$temp = "";
	while($arr = mysql_fetch_array($result,MYSQL_ASSOC)){
		
		$temp .= "\r\n\t<tr>";
		$temp .= "\r\n\t\t<td>admin</td>";
		$temp .= "\r\n\t\t<td colspan=\"3\">".htmlspecialchars_decode($arr['content'])."</td>";
		$temp .= "\r\n\t</tr>";
	}
	return $temp;
}
?>