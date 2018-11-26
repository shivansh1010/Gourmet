
<!DOCTYPE html>
<html>
<head>
    <title>Search Restaurants | Gourmet</title>
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

  $sortby = 'rating';
  //$name = 'dosa';

  if($sortby=='rating'){
    //sort by rating
    $result = mysqli_query($link,"SELECT DISTINCT f.name,r.name,r.star,r.veg_nonveg,s.price,r.city FROM food f, serves s,restaurant r WHERE f.id = s.f_id AND s.r_id = r.id AND f.name = '$name'  ORDER BY s.star;");
  }
  else if($sortby='price'){
    //sort by price
    $result = mysqli_query($link,"SELECT DISTINCT f.name,r.name,r.star,r.veg_nonveg,s.price,r.city FROM food f, serves s,restaurant r WHERE f.id = s.f_id AND s.r_id = r.id AND f.name = '$name'  ORDER BY s.price;");
  }


  $res = mysqli_query($link,"SELECT * from food where name='$name'");


  $row=mysqli_fetch_array($res);
  echo "<h1>".$row['name']." ".$row['type']."</h1>";
  echo '<table style="color:white;">';
  echo '<th>Name</th><th>Star</th><th>Type</th><th>Price</th><th>City</th>';
  while($row = mysqli_fetch_array($result))
  {
    //echo '<h1>'.$row["star"].'</h1>';
    echo '<tr>';
    echo '<td>'.$row["name"].'</td>'; //.$row['star'].$row['type'].$row['price'].$row['city'];
    echo '<td>'.$row["star"].'</td>';
    echo '<td>'.$row["veg_nonveg"].'</td>';
    echo '<td>'.$row["price"].'</td>';
    echo '<td>'.$row["city"].'</td>';
    echo '</tr>';
  }
  echo '</table>'


 ?>

 <br><br>
 </center>
 </body>
 </html>
