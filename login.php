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
  $_SESSION['u_name'] = $row['name'];
  $_SESSION['u_city'] = $row['city'];
  $_SESSION['u_mobno'] = $row['mobile_no'];
  $res = 200;
}

$url = '/Gourmet?res='.$res;
if ( $res != 200){
  $url .= '#login';
}
header('Location: '.$url);

?>
