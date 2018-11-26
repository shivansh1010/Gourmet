
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
    //echo "$nm";
    echo '<div class="bodytrbg"><div style="background:rgba(50,50,50,0.8);border-radius: 5px;">';
    echo '<table border=0 cellpadding=2>';
    echo '<tr>';
    echo '<td  class="field name">'.$row["name"].'  ('.$row["type"].')</td>';
    $piclen = 40*$row["avg_r"];
    echo '<td rowspan=2 class="field starttd" ><div class="star" style="width:'.$piclen.'px;"></div></td>';
    echo '</tr><tr>';
    echo '<td class="field mobile">&nbsp;&nbsp;₹&nbsp;'.floor($row["avg_p"]).' &nbsp;(Avg.)</td>';
    echo '</tr>';

    echo '</table>';
    echo '</div></div>';

/*
  foreach($row as $key => $value){
    //use floor function
    echo $key.' '.$value.' ';
}*/
  echo '<br>';


      echo '<div class="labelhead">Available in following Restaurants :  </div>';



  $sortby = 'rating';
  if($sortby=='rating'){
    //sort by rating
    $q = "SELECT DISTINCT f.name,r.name,r.star,r.veg_nonveg,r.address,s.price,r.city FROM food f, serves s,restaurant r WHERE f.id = s.f_id AND s.r_id = r.id AND f.name = '$name'  ORDER BY r.star DESC;";
  }
  else if($sortby='price'){
    //sort by price
    $q = "SELECT DISTINCT f.name,r.name,r.star,r.veg_nonveg,r.address,s.price,r.city FROM food f, serves s,restaurant r WHERE f.id = s.f_id AND s.r_id = r.id AND f.name = '$name'  ORDER BY s.price;";
  }

  $result = mysqli_query($link,$q);
  if(!$result){
    print("Somthing somewhere went wrong<br>".$q.'<br>'.mysqli_error($link));
  }
/*
  echo '<table style="color:white;">';
  echo '<th>Name</th><th>Star</th><th>Type</th><th>Price</th><th>City</th>';*/
  while($row = mysqli_fetch_array($result))
  {

          $nm=$row['name'];
            echo '<div class="bodytrbg restro"><div style="background:rgba(50,50,50,0.8);border-radius: 5px;"><a href=search.php?search_type=restaurant&keyword='.$nm.'>';
            echo '<table border=0 cellpadding=2>';
            echo '<tr>';
            echo '<td  class="field name">'.$row["name"].'  ('.$row["veg_nonveg"].')</td>';
            $piclen = 40*$row["star"];
            echo '<td rowspan=2 class="field starttd" ><div class="star" style="width:'.$piclen.'px;"></div></td>';
            echo '<td class="food_price" rowspan=2>₹'.$row['price'].'</td>';
            echo '</tr><tr>';
            echo '<td colspan=2 class="field address">&nbsp;&nbsp;'.$row["address"].', '.$row["city"].'</td>';


            echo '</tr></table>';
            echo '</a></div></div>';

  }
  //echo '</table>'


 ?>

 <br><br>
 </center>
 </body>
 </html>
