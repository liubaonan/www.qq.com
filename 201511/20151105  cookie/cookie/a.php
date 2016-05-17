<?php



$username = "刘宝南1";
setcookie('username',$username,time()+500);

echo "保存成功";
var_dump($_COOKIE['username']);


?>