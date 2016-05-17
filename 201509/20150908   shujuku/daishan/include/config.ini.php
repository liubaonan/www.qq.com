<?php

define("WEBROOT",str_replace("\\","/",substr(dirname(__FILE__),0,-8)));	//D:/wamp/www/message


$web['title'] = "留言程序";
$web['url']= "http://www.news.com";
$web['codelen'] = 4;	//验证码我要显示几位
$web['pagenumber'] = 2;	//留言页面每页要显示多少条


?>