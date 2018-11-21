<?php
 include("PhpMysqlConnectivity.php");

  $name="chawalas";

  $res=mysqli_query($link,"INSERT INTO `restaurant`( `name`, `address`, `mobile_no`, `star`, `city`, `open_time`, `close_time`, `veg_nonveg`) VALUES ('$name','russe','1234567894','3','jabalpur','11:00:00','22:00:00','both')");

  $result = mysqli_query($link,"SELECT id from restaurant where name='$name'");
  $r_id=mysqli_fetch_array($result)["id"];
  $dish_count=1;
  //enter form data here
  for ($i=0; $i <1 ; $i++) {

    mysqli_query($link,"INSERT into serves VALUES('$r_id',2,3,200,10)");
  }
  echo "completed";
 ?>
