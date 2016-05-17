<?php


var_dump($_POST);
var_dump($_FILES);

?>





<form method="POST" action="./upload.php" enctype="multipart/form-data">
	<input type="file" name="picture[]" /><BR />
	<input type="file" name="picture[]" /><BR />
	<input type="file" name="picture[]" /><BR />
	<input type="file" name="picture[]" /><BR />
	<input type="hidden" name="upload" value="1" />
	<input type="submit" value="upload" />
</form>













