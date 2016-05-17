<?php


if(isset($_COOKIE['isloging']) && $_COOKIE['isloging'] == 1){	//判断是否为登录s
	echo "欢迎您：".$_COOKIE['username']."<br />";
	echo "<a href=\"./action.php?action=logout\">退出</a>";
}else{

	exit("<script>alert(\"请登录后操作\");window.location.href=\"login.php\";</script>");
}


