<?php
//清除cookie 如果后面加上‘/’的话 那么a脚本也要加上 不然不行
setcookie('username',"",time()-3600);
var_dump($_COOKIE['username']);
?>