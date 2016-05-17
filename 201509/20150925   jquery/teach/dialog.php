<?php
include("include/config.ini.php");
include("include/comm.ini.php");
$pdo = new PDO($dsn,USER,PAS,$options);

	if(isset($_POST['action']) && $_POST['action'] == "login"){
		$password= $_POST['password'];
		
		$sql = "select * from office where `password`='".$password."'";
		$smt = $pdo->query($sql);
		$arr = $smt->fetchAll();
		var_dump($arr);
		
		if($arr){
			exit("<script>alert(\"登陆成功，宝贝\");window.location.href=\"dialog2.php\";</script>");
		}else{
			exit("<script>alert(\"登陆失败，亲\");window.history.go(-1);</script>");
		}
}	
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Dialog - Animation</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script>
  $(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( ".opener" ).click(function() {
			sort = $(this).val();
			$("#sort").attr({ value: sort});
			$( "#dialog" ).dialog( "open" );
    });
  });
  </script>
</head>
<body>
 
<div id="dialog" title="输入签约密码">
	<form action="" method="post">
		<input type="password" name="password" />
		<input type="hidden" name="action"  value="login"/>
		<input type="submit" value="签约" />		
	</form>
</div>
 
<button  class="opener" value="1">办公室</button>
<button  class="opener" value="2">稽查局</button>
<button  class="opener" value="3">行政科</button>
 
 
</body>
</html>