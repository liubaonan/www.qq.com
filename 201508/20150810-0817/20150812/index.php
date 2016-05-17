<?php
include_once("./data.php");		//根据相对路径的引用
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>每日牛吧</title>
<style type="text/css">
*{ margin:0; padding:0;}
ul{ list-style:none;}
a{ text-decoration:none; color:#2d64b4;}
body{ font-size:12px; background:#FFF;}
img{ border:none;}

.left{ float:left;}
.right{ float:right;}
.clear{ clear:both;}



.main{ width:718px; height:166px; border:1px solid #39C; margin:100px auto;}

.everyday{ width:360px; margin-left:13px; margin-right:18px; display:inline;}
.everyday h2{ font-size:14px; color:#666; background:url(images/icon1.png) no-repeat 0 16px; text-indent:11px;}
.hd{ height:40px; line-height:40px;}
.everyday dl{ width:105px; margin-right:22px;}
.everyday dl.last{ margin-right:0;}
.everyday dl img{ border:1px solid #3F3; padding:1px 2px 1px 1px;}
.everyday dl dd{ height:20px; line-height:20px; overflow:hidden; text-align:center;}


.god{ width:295px; margin-left:19px;}
.god ul li{ height:24px; overflow:hidden;}
</style>
</head>

<body>
	<div class="main">
    	<div class="left everyday">
        	<div class="hd">
            	<h2 class="left">每日牛吧</h2>
            	<a class="right" href="more.php?sid=1">更多&gt;&gt;</a>
            </div>
            <div class="clear">
							   
			   <?php
			   
			   $temp = "";
			   
			   for($i=1;$i<=3;$i++){  

				$showCss = $i==3?"left last":"left";

				$temp .= "\r\n\t<dl class=\"".$showCss."\">"; //<dl class="left last">
                $temp .= "\r\n\t\t<dt><a target=\"_blank\" href=\"show.php?id=".$i."&sid=1\"><img src=\"".$imgNews[$i]['imagUrl']."\" alt=\"".$imgNews[$i]['title']."\" /></a></dt>";
                $temp .= "\r\n\t\t<dd><a target=\"_blank\" href=\"show.php?id=".$i."&sid=1\">".$imgNews[$i]['title']."</a></dd>";
                $temp .= "\r\n\t\t<dd>".$imgNews[$i]['description']."</dd>";
				$temp .= "\r\n\t</dl>";
			   }
			   
			   echo $temp;
			   ?>
			

            </div>
        </div>
        <img class="left" src="images/line.png" alt="" />
        <div class="left god">
        	<div class="hd">
            	<h2 class="left">神贴</h2>
            	<a class="right" href="more.php?sid=2">更多&gt;&gt;</a>
            </div>
            <ul class="clear">
			
				<?php
				krsort($textNews);
				$temp = "";
				
				$n =1;
				foreach($textNews as $k =>$t){
					$temp .= "\r\n\t\t<li>".$k.":<a href=\"show.php?id=".$k."&sid=2\">".$t["title"]."</a></li>";
					$n++;	
					if($n == 6)
						break;
				}
				echo $temp;
				?>

            </ul>
        </div>
    </div>
</body>
</html>

