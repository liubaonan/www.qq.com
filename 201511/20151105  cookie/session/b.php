<?php
session_start();


//清除session数组 必须先访问a脚本，否则打印不出东西
$_SESSION = array();
var_dump($_SESSION);


?>