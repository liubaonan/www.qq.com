<?php
include_once("include/comm.ini.php");
include_once("include/config.ini.php");

$pdo = new PDO($dsn,USER,PAS,$options);
$sql="select * from city where parent_id = 0";
$liu=$qdo->query($sql);
$priovinces=$liu->fetchAll();
?>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">


</script>

<form action="" method="get">
<select id=province>
	<option value="">请选择省份</option>
</select>

</form>