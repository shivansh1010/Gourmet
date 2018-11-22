<?php
include("PhpMysqlConnectivity.php");
$n=$_GET['len'];
$r_id=$_GET['r_id'];
for ($i=1; $i <= $n; $i++) {
  $nm=$_GET["name".$i];
  $dis=$_GET["discount".$i];
  $star=$_GET['star'.$i];
  $price=$_GET["price".$i];
  //echo "SELECT id FROM food WHERE 1";
  //print("SELECT id FROM food WHERE name=$_GET['nm'];");
  $res = mysqli_query($link,"SELECT id FROM food WHERE name='$nm';" );

  $f_id = mysqli_fetch_assoc($res)['id'];
  //echo "$r_id";
  mysqli_query($link,"INSERT INTO serves VALUES($r_id,$f_id,$star,$price,$dis);");
  if(mysqli_error($link))header("Loaction: index.php");
  else echo "Succesfully Executed transaction";
}
 ?>
