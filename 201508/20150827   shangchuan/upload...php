<?php




var_dump($_FILES);


/*
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

*/








$tmpname=$_FILES["picture"]["tmp_name"];

$tmpname2=$_FILES["picture"]["name"];
var_dump($tmpname2);




foreach($tmpname as $key=>$value){
	
	$name=rand(1,111).".jpg";
	if(is_uploaded_file($value)){
		if(move_uploaded_file($value,$name)){
			echo $_FILES["picture"]["name"][$key]."上传成功<br/>";
		}
	}
}
























































































































