<?php
  include("PhpMysqlConnectivity.php");

  $n=$_GET['len'];

  $r_id=$_GET['r_id'];

  for ($i=1; $i <= $n; $i++) {

    $nm=$_GET["name"."$i"];

    $dis=$_GET{"discount"."$i"};

    $star=$_GET["star"."$i"];

    $price=$_GET["price"."$i"];

    //echo "SELECT id FROM food WHERE 1";

    $res = mysqli_query($link,"SELECT id FROM food WHERE name='$nm'");

    $f_id = mysqli_fetch_assoc($res)['id'];
    if(! $f_id){
      echo "Please Enter Correct Information";
      header("Location: add_serve.php");
    }
    mysqli_query($link,"INSERT INTO serves VALUES($r_id , $f_id , $star , $price , $dis);");

  }

 ?>
