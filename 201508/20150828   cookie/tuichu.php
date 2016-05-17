<?php

if(isset($_COOKIE['isloging']) && $_COOKIE['isloging'] == 1){
	
	echo "欢迎您：".$_COOKIE['username']."先生"."<br/>";
	echo "<a href=\"action.php?action=logout\">退出</a>";
}else{
	
	exit( "<script>alert(\"请登录后操作\");window.location.href=\"20150830...php\";</script>");
	
}





















?>