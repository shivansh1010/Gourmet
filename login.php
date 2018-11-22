<?php

include('PhpMysqlConnectivity.php');

$u_id = $_POST['id'];
$result = mysqli_query($link,"SELECT * FROM user WHERE id = '$u_id'");

$row = mysqli_fetch_array($result);
if ($result->num_rows == 0) {
  $res = 404;
}
else if ($row['pswd'] != $_POST['pswd']) {
  $res = 403;
}
else{
  session_start();
  $_SESSION['u_id'] = $row['id'];
  $_SESSION['u_city'] = $row['city'];
  $res = 200;
  print_r($_SESSION);
}

$url = '/Gourmet?res='.$res;
if ( $res != 200){
  $url .= '#login';
}
header('Location: '.$url);

?>
