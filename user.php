<!DOCTYPE html>
<html>
<head>
	<title>User | Gourmet</title>
</head>
<body>
	<?php
	session_start();
	include('PhpMysqlConnectivity.php');

    if ( !isset($_SESSION['u_id'])) {
      header('Location: '.'/Gourmet#login');
    }

    // echo $_SESSION['u_name']; have to work on this
    echo $_SESSION['u_id'].'<br>';
    echo $_SESSION['u_city'].'<br>';
    echo $_SESSION['u_mobno'].'<br>';
    echo $_SESSION['u_name'].'<br>';

    $id = $_SESSION['u_id'];

	$q = "SELECT r.id, r.name, r.address, r.city FROM restaurant r, owner o WHERE '$id' = o.u_id AND o.r_id = r.id";
	//print($q);
    $result = mysqli_query($link,$q);

    while($row = mysqli_fetch_row($result)){
		echo $row[1].' - '.$row[2].' - '.$row[3].' - ';
		echo '<a href="./restaurant.php?r_id='.$row[0].'">Edit Menu</a><br>';
	}
	echo '<a href="./add_rest_form.php?u_id="'.$id.'>Add restaurant</a>';
  ?>
</body>
</html>
