<?php 

/* header('Content-type:image/png');
$width = 500;
$height = 400;
$img = imagecreatetruecolor($width, $height);
$white = imagecolorallocate($img,255,255,255);
imagefilledrectangle($img,1,1,500-2,400-2,$white);//画一个矩形并填充

$text = "谢谢你长得那么好看，还肯为我点赞";
$font = "ygyxsziti2.0.ttf";
$red = imagecolorallocate($img,255,0,0);
imagettftext($img, 20, 0, 22, 200, $red, $font, $text);


imagepng($img);
 */
$a = imagecreate(200,100);
echo $a;
$b = imagecreatetruecolor(200,100);
echo "<br/>".$b;
var_dump(gd_info());

var_dump(getimagesize('b.jpg'));
$a = getimagesize('b.jpg')['mime'];
echo $a;
?>