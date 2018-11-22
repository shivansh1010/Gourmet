<?php
  include("PhpMysqlConnectivity.php");
<<<<<<< HEAD
  $food_name="pig";
  $result=mysqli_query($link,"SELECT DISTINCT a.name,c.name,b.star,a.type,b.price,c.city FROM food a, serves b,restaurant c WHERE a.id=b.f_id AND b.r_id=c.id AND a.name='$food_name' AND CAST(CURRENT_TIME() AS time) BETWEEN c.open_time AND c.close_time  ORDER BY b.price ;");
  while($row = mysqli_fetch_array($result))
  {

    foreach ($row as $key => $value) {
        echo $value." ";
    }
    echo "<br>";
    //It Works Printing each value;
    //pata he be
=======

  $sortby = 'rating';
  //$name = 'dosa';

  if($sortby=='rating'){
    //sort by rating
    $result = mysqli_query($link,"SELECT DISTINCT f.name,r.name,s.star,f.type,s.price,r.city FROM food f, serves s,restaurant r WHERE f.id = s.f_id AND s.r_id = r.id AND f.name = '$name' AND CAST(CURRENT_TIME() AS time) BETWEEN r.open_time AND r.close_time ORDER BY s.star;");
  }
  else if($sortby='price'){
    //sort by price
    $result = mysqli_query($link,"SELECT DISTINCT f.name,r.name,s.star,f.type,s.price,r.city FROM food f, serves s,restaurant r WHERE f.id = s.f_id AND s.r_id = r.id AND f.name = '$name' AND CAST(CURRENT_TIME() AS time) BETWEEN r.open_time AND r.close_time ORDER BY s.price;");    
>>>>>>> fe3fab8c31133ab0d69769a66a292ecc5c221f9c
  }
  
  echo '<table>';
  echo '<th>Name</th><th>Star</th><th>Type</th><th>Price</th><th>City</th>';
  while($row = mysqli_fetch_array($result))
  { 
    echo '<tr>';
    echo '<td>'.$row["name"].'</td>';//.$row['star'].$row['type'].$row['price'].$row['city'];
    echo '<td>'.$row["star"].'</td>';
    echo '<td>'.$row["type"].'</td>';
    echo '<td>'.$row["price"].'</td>';
    echo '<td>'.$row["city"].'</td>';
    echo '</tr>';
  }
  echo '</table>'


 ?>
