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


/*
	用户登录
*/
include_once("./include/config.ini.php");//网站配置文件
include_once(WEBROOT."/include/comm.ini.php");	//数据库配置文件

//判断退出登录
if(isset($_GET['action']) && $_GET['action'] == 'loginout'){
	
		$_SESSION = array();
		if (isset($_COOKIE[session_name()])) {
			setcookie(session_name(), '', time()-42000);
		}
		// Finally, destroy the session.
		session_destroy();
		exit("<script>alert(\"退出成功\");window.location.href=\"login.php\";</script>");

}

//权限控制
if(isset($_SESSION['islogin']) && $_SESSION['islogin'] ==1)
	exit("<script>alert(\"已登录，请勿重复登录\");window.location.href=\"index...php\";</script>");

if(isset($_POST['action']) && $_POST['action'] == 'login'){

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if(empty($username))
		exit("<script>alert(\"用户名不能为空\");window.history.go(-1);</script>");
	
	if(empty($password))
		exit("<script>alert(\"密码不能为空\");window.history.go(-1);</script>");	

	//登录的处理
	//查看是否允许有重复注册的现象
	$link = mysql_connect(HOST,USER,PAS);
	mysql_query("SET NAMES ".CHAR);
	mysql_select_db(DB);	//选择数据库	
	
	$sql = "select * from users where `username`='".$username."'";
	$resultRepetUser = mysql_query($sql);
	$arr = mysql_fetch_array($resultRepetUser,MYSQL_ASSOC);
	if(!$arr)
		exit("<script>alert(\"没有此用户\");window.history.go(-1);</script>");	
	
	if($arr['password'] != md5($password)){
		exit("<script>alert(\"密码错误~！\");window.history.go(-1);</script>");
	}else{
		//session 赋值
		$_SESSION['islogin'] = '1';	//已经登录
		$_SESSION['name'] = $username;
		$_SESSION['uid'] = $arr['uid'];
			
			if(isset($_POST['remember']) && $_POST['remember'] == '1'){
				$lifetime = time()+3600*24;
				setcookie(session_name(),session_id(),$lifetime);
			}
		exit("<script>alert(\"用户登录成功\");window.location.href=\"indexx...php\"</script>");		
	}		
}
?>
<form  method="post" action="">
<table width="600" border="1" align="center">
  <tr>
    <td colspan="2" align="center">用户登录</td>
  </tr>
  <tr>
    <td width="167">用户名:</td>
    <td width="417"><input type="text" name="username" /></td>
  </tr>
  <tr>
    <td>密码:</td>
    <td><input type="password" name="password" /></td>
  </tr>
  <tr>
    <td>是否记录登录状态</td>
    <td>
	<input type="checkbox" name="remember" value="1" />
	<input type="hidden" value="login" name="action" />
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit"  value="登录" />
      <input type="reset"  value="重设" />
   </td>
  </tr>
</table>
 </form>