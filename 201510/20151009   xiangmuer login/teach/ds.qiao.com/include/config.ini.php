<?php
session_start();
define("WEB", dirname(__FILE__));
define("WEBROOT", substr(str_replace("\\", "/",WEB),0,-8));


?>