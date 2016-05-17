<?php

session_start();

 ini_set('session.save_path','/tmp/');



ini_set('session.gc_maxlifetime',21600);

//保存一天

$lifeTime = 24 * 3600;



setcookie(session_name(), session_id(), time() + $lifeTime, "/");



$_SESSION['username'] = 'liubaonan';

var_dump($_SESSION);


session_destroy();