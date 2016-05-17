<?php





















































/*
//文件重命名
$a=__DIR__;//当前路径D:\wamp\www\www.qq.com\20150828
$b=substr($a,0,-9);
echo $a;
echo "<br/>";
echo $b;

echo "<hr/>";

$c="D:\wamp\www\www.qq.com";
echo chdir($c);         //改变建立目录的路径
@mkdir("333333333333",0777);//建立目录

echo rmdir("333333333333");

echo "<br/>";

echo getcwd();

$s= opendir($c);//打开一个目录句柄
echo "<br/>";   
//echo readdir($s);//读取目录句柄
echo "<hr/>";
if($s){
	echo $c."下的文件有:<br/>";
	while($file=readdir($s)){
		if($file!="." && $file!="..")
		echo $file."<br/>";
	}
}
echo closedir($s);//关闭目录句柄
echo "<hr/>";
var_dump( scandir($c));


$ds= fopen("ss.txt","a+");

echo fread($ds,5);
copy("ss.txt","sssss.txt");




	if ($b = opendir ( $a )) {
		while ( false !== ($file = readdir ($b)) ) {	
				echo "$file<br />\n";
		}
	} 


$file=$a."/123.txt";
$newfile=$a."/234.txt";
if(@rename($file,$newfile)==true){//第一个表示原来文件名字，第二个改后的名字
	echo "成功";
}else{
	echo "失败";
}




if(is_dir($a)){             //检测目录是否存在
	if($c=opendir($a)){          //打开目录
		echo "打开成功";
		//closedir($c);//关闭目录
	}else{
		echo "b没打开";
}
}else{
	echo "不存在";
}

echo readdir($c);//读取目录，读取必须把关闭目录注释掉
*/



/*

$user=[
		"admin"=>111,
		"刘宝南"=>222
];


if(isset($_POST["action"]) && $_POST["action"]=="login"){
	
	$username=trim($_POST["user"]);
	$password=trim($_POST["pwd"]);
	
	if(empty($username)){
		exit("<script>alert(\"用户名不能为空\");window.history.go(-1);</script>");
	}
	if(empty($password)){
		exit( "<script>alert(\"密码不能为空\");window.history.go(-1);</script>");
}
	
	
	
	if(isset($user[$username]) && $user[$username]==$password){
		
		setcookie("isloging","1",time()+60);
		setcookie("username",$username,time()+60);
		
		
		exit ("<script>alert(\"登陆成功\");window.location.href=\"xinxin.php\";</script>");
	}else{
		exit ("<script>alert(\"用户名或者密码不正确\");window.history.go(-1);</script>");
	}
}




header("Centent-type:image/jpeg");

$a="1.jpg";
$b="2.jpg";
$width=800;
$height=600;
$percent="0.8";

list($width,$height)=getimagesize($a);
$new_width=$width*$percent;
$new_height=$height*$percent;

$str_img=imagecreatetruecolor($new_width,$new_height);
$image=imagecreatefromjpeg($a);
imagecopyresampled($str_img,$image,0,0,0,0,$new_width,$new_height,$width,$height);

$print_img=imagecreatefromjpeg($b);
list($print_width,$print_height)=getimagesize($b);

imagecopymerge($str_img,$print_img,0,0,0,0,$print_width,$print_height,60);

imagejpeg($str_img);

*/










