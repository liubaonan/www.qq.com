





<form action="action.php" method="POST" />
	用户名<input type="text" name="user" /><br />
	密码:<input type="password" name="pwd" /><br />
	验证码:<input type="code" name="code" /><br />
	<img src="code.php"  onclick="this.src='code.php?'+Math.random();" /><br />
	是否保存登录：期限是1小时<input type="checkbox" name="lifetime" value="1"/>
	<input type="hidden" value="login" name="action" />
	<input type="submit" value="登录" />
</form>

<?php

