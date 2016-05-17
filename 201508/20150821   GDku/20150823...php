<?php
/*
$n=5456435;
if($n%2==0){
	echo '是';
}else{
	echo '不是';
}

echo '<br/>';





$a=3;
$b=&$a;
$b=4;
unset($b);
echo $a;

echo '<br/>';

$tmp = 0 === "aertt"? 1: 2;   echo $tmp;  
echo '<br/>';


$a='a654sdfsfs';
echo (int)$a;
echo '<br/>';
//将下面的字符拼装成字符串输出
$arr = array( 
'I', 'AM', 'MILO!', 'DAY', 'DAY', 'UP!' 
);

$str=strtolower(implode(' ',$arr));
echo $str;

echo '<br/>';

*/

$img='a.jpg';
$percent=.8;
list($width,$height)=getimagesize($img);
$new_width=$width*$percent;
$new_height=$height*$percent;

$src_img=imagecreatetruecolor($new_width,$new_height);
$image=imagecreatefromjpeg($img);
imagecopyresampled($src_img,$image,0,0,0,0,$new_width,$new_height,$width,$height);

imagejpeg($src_img);




