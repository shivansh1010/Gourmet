<!DOCTYPE html>
<html>
<head>
	<title>Gourmet</title>
</head>
<body>
<form method="post" action="./add_serve.php">
	item name<input type="text" name="name"><br>
	Price <input type="numner" name="price"><br>
	Discount <input type="number" name="discount"><br>
	<?php
		include("PhpMysqlConnectivity.php");
		echo '<input type="hidden" name="r_id" value="'.$_GET['r_id'].'">';
	?>
	<input type="submit" value="Add">
</form>

</body>
</html>

