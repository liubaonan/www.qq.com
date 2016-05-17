<?php
include("include/config.ini.php");
include(WEBROOT."/include/comm.ini.php");

$pdo = new PDO($dsn,USER,PAS,$options);
$sql = "select * from city where parent_id = 0";
$stmt = $pdo->query($sql);
$provinces = $stmt->fetchAll();

?>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#province").change(function(){	
		var  region_id= $(this).val();
		$.ajax({
		   type: "POST",
		   url: "getSelect.php",
		   data: "pid="+region_id+"&city=1",
		   dataType:"html",
		   success: function(msg){
				$("#city").empty().append(msg);

		   }
		});

	});
	$("#city").change(function(){
	
		var  region_id= $(this).val();
		$.ajax({
		   type: "POST",
		   url: "getSelect.php",
		   data: "pid="+region_id+"&area=1",
		   dataType:"html",
		   success: function(msg){	
				$("#area").empty().append(msg);

		   }
		});

	});
	

})

</script>


<form action="" method="get" />
	<select id="province">
		<option value="">请选择省份</option>
		<?php
			$temp = "";
			foreach($provinces as $p){
				$temp .= "<option value=\"".$p['region_id']."\">".$p['region_name']."</option>";
			}
			echo $temp;
		?>
	</select>
	<select id="city">
		<option value="">请选择城市</option>
	</select>
	<select id="area">
		<option value="">请选择区域</option>
	</select>
</form>

