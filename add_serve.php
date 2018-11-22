<?php
  include("PhpMysqlConnectivity.php");
  $n = (int)$_GET["num"];
  $name = $_GET['name'];
  $address = $_GET['address'];
  $mobile_no = (int)$_GET['mobile_no'];

  $star = (int)$_GET['star'];
  $city = $_GET['city'];
  $open_time = $_GET['open_time'];
  $close_time = $_GET['close_time'];
  $veg_nonveg = $_GET['veg/nonveg'];
  $res1 = mysqli_query($link, "INSERT INTO `restaurant`(`name`, `address`, `mobile_no`, `star`, `city`, `open_time`, `close_time`, `veg_nonveg`) VALUES('$name','$address','$mobile_no','$star','$city',CAST('$open_time' AS time),CAST('$close_time' AS time),'$veg_nonveg');");
  //print(mysqli_error($link));
  $res = mysqli_query($link,"SELECT max(id) FROM `restaurant` WHERE 1 ");
  $r_id = mysqli_fetch_array($res)[0];
  echo $r_id;

 ?>
