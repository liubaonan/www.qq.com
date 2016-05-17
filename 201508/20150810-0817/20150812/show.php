<?php
//新闻详细页展示

include_once("data.php");



if(isset($_GET['id'])&& isset($_GET['sid'])){

	//判断调用那个数组
	$id = (int)$_GET['id'];
	
	//展示图片新闻
	$temp = "";
	if($_GET['sid'] ==1){
		$temp .= $imgNews[$id]['title']."<br />";
		$temp .= "<image src=\"".$imgNews[$id]['imagUrl']."\" /><br />";
		$temp .= $imgNews[$id]['content'];
	}
	
	//展示文字新闻内容
	if($_GET['sid'] ==2){
		$temp .= $textNews[$id]['title']."<br />";
		$temp .= $imgNews[$id]['content'];
	}
	
	echo $temp;
	
}else{
	exit("<script>alert(\"请正确访问该脚本\")</script>");

}


?>