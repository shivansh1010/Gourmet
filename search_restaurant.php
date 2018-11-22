<?php
  include("PhpMysqlConnectivity.php");
  
  $sortby = 'rating';

  if($sortby=='rating'){
    //sort by rating
    $result = mysqli_query($link,"SELECT DISTINCT a.name,a.address,a.mobile_no,a.star,a.city,a.veg_nonveg,a.open_time,a.close_time FROM restaurant a WHERE a.veg_nonveg='$food_pref' AND a.city='jabalpur' AND CAST(CURRENT_TIME() AS time) BETWEEN a.open_time AND a.close_time ORDER BY a.star DESC;");
  }
  while($row = mysqli_fetch_array($result))
  {
    foreach ($row as $key => $value) {
        echo $value." ";
    }
    echo "<br>";
  }

 ?>
