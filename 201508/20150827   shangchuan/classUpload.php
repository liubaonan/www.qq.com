<?php

include_once("./upload.class.php");		//引入上传类



$files = $_FILES['pic'];

$pics = new upload($files);
$msg = $pics->actionUpload();

var_dump($msg);







