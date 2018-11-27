<?php
  include("PhpMysqlConnectivity.php");
  session_start();
  $name = $_POST['name'];
  $adress = $_POST['address']; 
  $mobile_no = $_POST['mobile_no']; 
  $star = $_POST['star']; 
  $twon = $_POST['twon']; 
  $open_time = $_POST['open_time'];
  $close_time = $_POST['close_time'];
  $vnv = $_POST['veg/nonveg'];
  $no = $_POST['no'];
  $q = "INSERT INTO `restaurant`( `name`, `address`, `mobile_no`, `star`, `city`, `open_time`, `close_time`, `veg_nonveg`) VALUES ('$name','$adress','$mobile_no','$star','$twon','$open_time','$close_time','$vnv')";
  $result = mysqli_query($link,$q);
  if(!$result){
    print("Somthing somewhere went wrong<br>".$q.'<br>'.mysqli_error($link));
  }

  $q = "SELECT LAST_INSERT_ID();";
  $result = mysqli_query($link,$q);
  if(!$result){
    print("Somthing somewhere went wrong<br>".$q.'<br>'.mysqli_error($link));
  }

  
  $r_id = mysqli_fetch_array($result)[0];
  $u_id = $_SESSION['u_id'];
  $q = "INSERT INTO `owner`(`u_id`, `r_id`) VALUES ('$u_id',$r_id)";
  $result = mysqli_query($link,$q);
  if(!$result){
    print("Somthing somewhere went wrong<br>".$q.'<br>'.mysqli_error($link));
  }
  
  $q = "INSERT INTO `seats`(`r_id`, `total`) VALUES ($r_id,$no)";
  $result = mysqli_query($link,$q);
  if(!$result){
    print("Somthing somewhere went wrong<br>".$q.'<br>'.mysqli_error($link));
  }
  header('Location: '.'restaurant.php?r_id='.$r_id);
 ?>
