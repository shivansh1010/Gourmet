<?php
  include("PhpMysqlConnectivity.php");
  $food_name="pig";
  $result=mysqli_query($link,"SELECT DISTINCT a.name,c.name,b.star,a.type,b.price,c.city FROM food a, serves b,restaurant c WHERE a.id=b.f_id AND b.r_id=c.id AND a.name='$food_name' AND CAST(CURRENT_TIME() AS time) BETWEEN c.open_time AND c.close_time AND a.name='pig' ORDER BY b.price ;");
  while($row = mysqli_fetch_array($result))
  {

    foreach ($row as $key => $value) {
        echo $value." ";
    }
    echo "<br>";
    //It Works Printing each value;
    //pata he be 
  }

 ?>
