<?php
$username = $_POST['username'];
$comment = $_POST['comment'];
if(empty($username))
	exit('<script>alert("用户名不能为空");window.history.go(-1);</script>');
if($_FILES['file']['size'] == 0)
	exit("<script>alert('上传文件不能为空');window.history.go(-1);</script>");
$file = $_FILES['file']['tmp_name'];
$type = $_FILES['file']['type'];

if($type!='image/jpeg' && $type!='image/gif'){
	exit('<script>alert("文件类型不正确");window.history.go(-1);</script>');//判断是否
}
if(!file_exists($username)){
	mkdir($username,0777,true);
}

$upload = $_SERVER['DOCUMENT_ROOT']."www.qq.com/201512/20151214/".$username."/".time().$_FILES['file']['name'];
if(is_uploaded_file($file)){//判断文件是否是通过post上传的
	$success = move_uploaded_file($file,iconv('utf-8','gb2312',$upload));//将上传的文件移动到该位置,iconv避免中文乱码
	if($success)
		exit('<script>alert("上传成功");window.history.go(-1);</script>');
	else 
		exit('<script>alert("上传失败");window.history.go(-1);</script>');
}


?>