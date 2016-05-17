<?php



/*



$filename = 'a.jpg'; 
$width = 200; 
$height = 200; 
header('Content-Type: image/jpeg'); 
list($width_orig, $height_orig) = getimagesize($filename); 
$ratio_orig = $width_orig/$height_orig; 
if ($width/$height > $ratio_orig) { 
$width = $height*$ratio_orig; 
} else { 
$height = $width/$ratio_orig; 
} 

$image_p = imagecreatetruecolor($width, $height); 
$image = imagecreatefromjpeg($filename); 
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig); 
imagejpeg($image_p, null, 100); 







$filename = '123.jpg'; 
$percent = 0.5; 
// Content type 
header('Content-Type: image/jpeg'); 
// Get new dimensions 
list($width, $height) = getimagesize($filename); 
$new_width = $width * $percent; 
$new_height = $height * $percent; 
// Resample 
$image_p = imagecreatetruecolor($new_width, $new_height); 
$image = imagecreatefromjpeg($filename); 
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height); 
// Output 
imagejpeg($image_p, null, 100);




header("Content-type:image/jpeg");
$imageName='b.jpg';
$liu='123.jpg';
$percent='0.5';
list($width,$height)=getimagesize($imageName);
//图片缩放为宽为200的

$new_width=$width*$percent;							//新宽
$new_height=$height*$percent;  //新高

$src_img=imagecreatefromjpeg($imageName);//原图片资源

$dst_img=imagecreatetruecolor($new_width,$new_height);
//水印
$printImg=imagecreatefromjpeg($liu);
list($print_width,$print_height)=getimagesize($liu);
imagecopymerge($dst_img,$printImg,$new_width-$print_width,$new_height-$print_height,0,0,100,100,80);

Imagecopyresized($dst_img,$src_img,0,0,0,0,$new_width,$new_height,$width,$height);



imagejpeg($dst_img);
imagedestroy($dst_img);
imagedestroy($src_img);

Imagecopyresized($dst_img,$src_img,0,0,0,0,$new_width,$new_height,$width,$height);




$img='a.jpg';
$percent=0.5;
list($width,$height)=getimagesize($img);
$new_width=$width*$percent;
$new_height=$height*$percent;

$image_p=imagecreatetruecolor($new_width,$new_height);
$image=imagecreatefromjpeg($img);
imagecopyresampled($image_p,$image,0,0,0,0,$new_width,$new_height,$width,$height);

header('Content-type:image/jpeg');
imagejpeg($image_p);
imagedestroy($imge_p);
imagedestroy($img);


$img='b.jpg';
$liu="a.jpg";
list($width,$height)=getimagesize($img);//取得图像的宽高。。。。。
$new_width=1500;						//新图像的宽
$new_height=$height/$width*$new_width;  //新图像的高

$src_img=imagecreatefromjpeg($img);
$dst_img=imagecreatetruecolor($new_width,$new_height);

imagecopyresampled($dst_img,$src_img,0,0,0,0,$new_width,$new_height,$width,$height);

$printImg = imagecreatefromjpeg($liu);
list($print_width,$print_height)= getimagesize($liu);

imagecopymerge($dst_img,$printImg,100,100,0,0,$print_width,$print_height,60);

header('Content-type:image/jpeg');
imagejpeg($dst_img);

*/



$img='b.jpg';
$percent=0.7;
$img2="d.jpg";
list($width,$height)=getimagesize($img);
$new_width=$width*$percent;
$new_height=$height*$percent;

$src_img=imagecreatetruecolor($new_width,$new_height);
$image=imagecreatefromjpeg($img);//新建一个图像


imagecopyresampled($src_img,$image,0,0,0,0,$new_width,$new_height,$width,$height);//重采样拷贝部分图像并调整大小

$print=imagecreatefromjpeg($img2);// 从 JPEG 文件或 URL 新建一图像
list($print_width,$print_height)=getimagesize($img2);

imagecopymerge($src_img,$print,0,0,0,0,$print_width,$print_height,80);//-- 拷贝并合并图像的一部分


header('Content-type:image/jpeg');
imagejpeg($src_img);
imagedestroy($image);
imagejpeg($imgs);

