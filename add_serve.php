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

  //echo $r_id;

  echo "<form  name='addres_food' action='serve_query.php' method='get'>";
  echo "<input type='hidden' name='len' value='$n' />";
  echo "<input type='hidden' name='r_id' value='$r_id' />";
  for ($i=1; $i <= $n; $i++) {
    $nm="name"."$i";
    $dis="discount"."$i";
    $star="star"."$i";
    $price="price"."$i";
    echo "<h2>details for dish "."$i</h2>";
    echo "<p><br>food name</p>
    <input type='text' name=$nm required>
    <p><br>rating</p>
    <input type='text' name=$star required>
    <p><br>Price</p>
    <input type='text' name=$price required>
    <p><br>Discount</p>
    <input type='text' name=$dis required>";
  }
  echo "<input type='submit'>";
  echo "</form>";

 ?>
