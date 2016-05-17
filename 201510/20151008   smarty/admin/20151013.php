<?php
define("WEB",dirname(__FILE__));
define("WEBROOT",substr(str_replace("\\","/",WEB),0,-6));
echo WEBROOT;
echo "<br/>";


?>