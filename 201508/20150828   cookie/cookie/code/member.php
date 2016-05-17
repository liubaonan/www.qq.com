<?php
session_start();

if(isset($_SESSION['isloging']) && $_SESSION['isloging'] == 1){	//判断是否为登录s
	echo "欢迎您：".$_SESSION['username']."<br />";
	echo "<a href=\"./action.php?action=logout\">退出</a>";
}else{

	exit("<script>alert(\"请登录后操作\");window.location.href=\"login.php\";</script>");
}



