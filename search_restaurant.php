<?php
  include("PhpMysqlConnectivity.php");

  $sortby = 'rating';

  if($sortby=='rating'){
    //sort by rating
    $result = mysqli_query($link,"SELECT DISTINCT a.name,a.address,a.mobile_no,a.star,a.city,a.veg_nonveg,a.open_time,a.close_time FROM restaurant a WHERE a.name = '$name'  AND a.city='jabalpur' ORDER BY a.star DESC;");
  }
  while($row = mysqli_fetch_array($result))
  {
    echo '<table>';
    echo '<th>Name</th><th>Address</th><th>Mobile No</th><th>Star</th><th>City</th><th>Veg/NonVeg</th><th>Open Time</th><th>Close Time</th>';
      echo '<tr>';
      echo '<td>'.$row["name"].'</td>';
      echo '<td>'.$row["address"].'</td>';
      echo '<td>'.$row["mobile_no"].'</td>';
      echo '<td>'.$row["star"].'</td>';
      echo '<td>'.$row["city"].'</td>';
      echo '<td>'.$row["veg_nonveg"].'</td>';
      echo '<td>'.$row["open_time"].'</td>';
      echo '<td>'.$row["close_time"].'</td>';
      echo '</tr>';
    echo '</table>';
  }
  $result=mysqli_query($link,"SELECT f.name, s.price FROM serves s,food f,restaurant r WHERE r.id=s.r_id AND f.id=s.f_id AND r.name='h4' ");
  echo '<br><table><th>Food Name</th><th>Price</th>';
  while($row = mysqli_fetch_assoc($result))
  {

      echo '<tr>';
      foreach ($row as $value) {
        // code...

      echo '<td>'.$value.'</td>';
    }echo '</tr>';
  }
  echo '</table>';

 ?>
