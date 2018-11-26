
<!DOCTYPE html>
<html>
<head>
    <title>Search Food | Gourmet</title>
    <link type="text/css" rel="stylesheet" href="css/rest_list.css" />
    <link type="text/css" rel="stylesheet" href="css/search_food.css" />
</head>
<body>


    <div class="header">
      <div class="header_top" >
        <div class="left_buttons">
          <a href="./food_list.php" class="header_hover" >Cuisines</a>
          <a href="./rest_list.php">Restaurant</a>
        </div>
        <div class="right_buttons">
          <?php
            include('login_buttons.php');
          ?>
        </div>
      </div>
    </div>
    <div class="headerbg"></div>
    <center>
        <div class="bodyhead">
          </div>
          <?php

include("PhpMysqlConnectivity.php");


  $q = "SELECT f.name, f.type, AVG(s.price) avg_p, AVG(s.star) avg_r FROM food f, serves s WHERE name='$name' AND f.id = s.f_id GROUP BY f.id ORDER BY name ASC , avg_r DESC;";
  $result = mysqli_query($link,$q);
  if(!$result){
    print("Somthing somewhere went wrong<br>".$q.'<br>'.mysqli_error($link));
  }
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  
  echo '<br>';
  echo '<h3>';
  foreach($row as $key => $value){
    //use floor function
    echo $key.' '.$value.' ';
  }
  echo '<h3>';
  echo '<br>';
  
  
  
  $sortby = 'rating';
  if($sortby=='rating'){
    //sort by rating
    $q = "SELECT DISTINCT f.name,r.name,r.star,r.veg_nonveg,s.price,r.city FROM food f, serves s,restaurant r WHERE f.id = s.f_id AND s.r_id = r.id AND f.name = '$name'  ORDER BY r.star DESC;";
  }
  else if($sortby='price'){
    //sort by price
    $q = "SELECT DISTINCT f.name,r.name,r.star,r.veg_nonveg,s.price,r.city FROM food f, serves s,restaurant r WHERE f.id = s.f_id AND s.r_id = r.id AND f.name = '$name'  ORDER BY s.price;";
  }

  $result = mysqli_query($link,$q);
  if(!$result){
    print("Somthing somewhere went wrong<br>".$q.'<br>'.mysqli_error($link));
  }

  echo '<table style="color:white;">';
  echo '<th>Name</th><th>Star</th><th>Type</th><th>Price</th><th>City</th>';
  while($row = mysqli_fetch_array($result))
  {
    echo '<tr>';
    echo '<td>'.$row["name"].'</td>'; 
    echo '<td>'.floor($row["star"]).'</td>';
    echo '<td>'.$row["veg_nonveg"].'</td>';
    echo '<td>'.floor($row["price"]).'</td>';
    echo '<td>'.$row["city"].'</td>';
    echo '</tr>';
  }
  echo '</table>'


 ?>

 <br><br>
 </center>
 </body>
 </html>
