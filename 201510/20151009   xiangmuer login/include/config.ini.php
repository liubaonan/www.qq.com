<?php
session_start();	//启动seession会话
define("WEB", dirname(__FILE__));
define("WEBROOT", substr(str_replace("\\", "/",WEB),0,-8));

?>