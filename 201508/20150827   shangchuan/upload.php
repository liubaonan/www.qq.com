<?php
/*
	上传文件的处理
*/



var_dump($_FILES);
var_dump($_FILES['picture']['tmp_name']);
$tmpName = $_FILES['picture']['tmp_name'];
foreach($tmpName as $k =>$v){
	$fileName = rand(100,200).".jpg";
	if(is_uploaded_file($v)){
		if(move_uploaded_file($v,$fileName))
			echo $_FILES['picture']['name'][$k]."文件上传成功<br />";
	}
}



$picKeys = array_keys($_FILES);

var_dump($picKeys);

//1 多文件上传处理 


foreach($picKeys as $v){	
	upload($v);
}


function upload($keys){

	if($_POST['upload'] ==1 && !empty($_FILES[$keys])){
			$tempName = $_FILES[$keys]['tmp_name'];
			$newName = rand(1,100).".jpg";
			if(is_uploaded_file($tempName)){
				if(move_uploaded_file($tempName,$newName))
					echo "上传成功";
			}
	}else{
		exit("<script>alert(\"没有任何文件上传\");window.history.go(-1)</script>");

	}
}


?>


