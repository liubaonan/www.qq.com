<?php
/*
	准备画布，就是准备资源
	获取颜色  准备图形，填充
	输出图像
	销毁图像

header("Content-type:image/png");

$resouceImg=imagecreatetruecolor(200,200);

$angercolor=imagecolorallocate($resouceImg,255,0,0);//定义矩形颜色
imagefilledrectangle($resouceImg,0,0,200,200,$angercolor);

$color=imagecolorallocate($resouceImg,255,255,255);//定义覆盖矩形颜色
imagefilledrectangle($resouceImg,2,2,196,196,$color);

$string="www.liuxiaosen.com";

$textBlack = imagecolorallocate($resouceImg,0,0,0);
imagestring($resouceImg,5,10,10,$string,$textBlack);

$zhsting="刘 宝 南";

$font='ygyxsziti2.0.ttf';

imagettftext($resouceImg,30,30,30,150,$angercolor,$font,$zhsting);

imagepng($resouceImg);

imagedestroy($resouceImg);


header("Content-type:image/png");

$liu=imagecreatetruecolor(300,300);

$bao=imagecolorallocate($liu,255,0,0);
imagefilledrectangle($liu,0,0,300,300,$bao);

$string="www.liuxiaosen.com";
$textBlack = imagecolorallocate($liu,255,255,0);
imagestring($liu,50,50,150,$string,$textBlack);

imagepng($liu);
imagedestroy($liu);






header("Content-type:image/png");
$width=$height=400;
//创建资源
$liu=imagecreatetruecolor($width,$height);
//创建矩形
$black=imagecolorallocate($liu,0,0,0);
imagefilledrectangle($liu,0,0,$width,$height,$black);

$white=imagecolorallocate($liu,255,255,255);
imagefilledrectangle($liu,1,1,$width-2,$height-2,$white);

$red=imagecolorallocatealpha($liu,255,0,0,40);
imagefilledellipse($liu,$width/4,$height/4,$width/2,$height/2,$red);

$yellow=imagecolorallocatealpha($liu,255,250,10,40);
imagefilledellipse($liu,$width/2,$height/2,$width/2,$height/2,$yellow);

$red=imagecolorallocatealpha($liu,2,0,0,40);
imagefilledellipse($liu,$width/8*5,$height/8*2.2,$width/2,$height/2,$red);

$zhstring="他娘的费劲";

$font='ygyxsziti2.0.ttf';
imagettftext($liu,$width/20,0,$height/1.8,$width/4*3.5,$black,$font,$zhstring);

imagepng($liu);
imagedestroy($liu);







header('Content-type:img/png');
$img=imagecreatetruecolor(300,300);
$liu=imagecolorallocate($img,255,255,0);

$string='www.liuxiaosen.com';
$nan=imagecolorallocate($img,255,0,0);
imagestring($img,50,50,150,$string,$nan);

imagepng($img);
imagedestroy($img);



header('Content-type:img/png');
$img=imagecreatetruecolor(300,300);

$liu=imagecolorallocate($img,255,255,0);
imagefilledrectangle($img,1,1,298,298,$liu);

$string='www.liuxiaosen.com';
$bao=imagecolorallocate($img,255,0,0);
imagestring($img,40,80,150,$string,$bao);
imagepng($img);
imagedestroy($img);

*/



header('Content-type:image/png');
//创建画布
$img=imagecreatetruecolor(300,300);


$white=imagecolorallocate($img,255,255,255);
imagefilledrectangle($img,1,1,298,298,$white);

$red=imagecolorallocatealpha($img,255,0,0,50);
imagefilledellipse($img,100,120,100,100,$red);

$yellow=imagecolorallocate($img,255,255,0);
imagefilledellipse($img,170,120,100,100,$yellow);

$Black=imagecolorallocate($img,0,0,0);
imagefilledellipse($img,140,180,100,100,$Black);

$string='www.liuxiaosen.com';
$bao=imagecolorallocate($img,255,0,0);
imagestring($img,30,110,270,$string,$bao);

imagepng($img);
imagedestroy($img);








































