<?php
  include("PhpMysqlConnectivity.php");

  $sortby = 'rating';
  //$name = 'dosa';

  if($sortby=='rating'){
    //sort by rating
    $result = mysqli_query($link,"SELECT DISTINCT f.name,r.name,s.star,f.type,s.price,r.city FROM food f, serves s,restaurant r WHERE f.id = s.f_id AND s.r_id = r.id AND f.name = '$name'  ORDER BY s.star;");
  }
  else if($sortby='price'){
    //sort by price
    $result = mysqli_query($link,"SELECT DISTINCT f.name,r.name,s.star,f.type,s.price,r.city FROM food f, serves s,restaurant r WHERE f.id = s.f_id AND s.r_id = r.id AND f.name = '$name'  ORDER BY s.price;");    
  }

  echo '<table>';
  echo '<th>Name</th><th>Star</th><th>Type</th><th>Price</th><th>City</th>';
  while($row = mysqli_fetch_array($result))
  {
    echo '<tr>';
    echo '<td>'.$row["name"].'</td>'; //.$row['star'].$row['type'].$row['price'].$row['city'];
    echo '<td>'.$row["star"].'</td>';
    echo '<td>'.$row["type"].'</td>';
    echo '<td>'.$row["price"].'</td>';
    echo '<td>'.$row["city"].'</td>';
    echo '</tr>';
  }
  echo '</table>'


 ?>
