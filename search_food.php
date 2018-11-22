<?php
  include("PhpMysqlConnectivity.php");

  $sortby = 'rating';
  //$name = 'dosa';

  if($sortby=='rating'){
    //sort by rating
    $result = mysqli_query($link,"SELECT DISTINCT f.name,r.name,s.star,f.type,s.price,r.city FROM food f, serves s,restaurant r WHERE f.id = s.f_id AND s.r_id = r.id AND f.name = '$name' AND CAST(CURRENT_TIME() AS time) BETWEEN r.open_time AND r.close_time ORDER BY s.star;");
  }
  else if($sortby='price'){
    //sort by price
    $result = mysqli_query($link,"SELECT DISTINCT f.name,r.name,s.star,f.type,s.price,r.city FROM food f, serves s,restaurant r WHERE f.id = s.f_id AND s.r_id = r.id AND f.name = '$name' AND CAST(CURRENT_TIME() AS time) BETWEEN r.open_time AND r.close_time ORDER BY s.price;");    
  }
  
  while($row = mysqli_fetch_array($result))
  { 
    print_r($row);
    //echo $row;
    echo "";//."$row['name'] $row['star'] $row['type'] $row['price'] $row['city']";
    echo "<br>";
  }

 ?>
