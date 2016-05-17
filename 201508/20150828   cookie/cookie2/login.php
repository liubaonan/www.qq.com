<?php


if(isset($_COOKIE['isloging']) && $_COOKIE['isloging'] ==1){
	exit("<script>alert(\"已经登录，请勿重复登录\");window.location.href=\"member.php\";</script>");
}
?>



<form action="action.php" method="POST" />
	用户名<input type="text" name="user" />
	密码:<input type="password" name="pwd" />
	<input type="hidden" value="login" name="action" />
	<input type="submit" value="登录" />
</form>