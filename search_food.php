
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

  $patrn='"'."%"."$name"."%".'"';
  echo "$patrn";
  $q = "SELECT f.name, f.type, AVG(s.price) avg_p, AVG(s.star) avg_r FROM food f, serves s WHERE name like $patrn AND f.id = s.f_id GROUP BY f.id ORDER BY name ASC , avg_r DESC;";
  //echo 'SELECT f.name, f.type, AVG(s.price) avg_p, AVG(s.star) avg_r FROM food f, serves s WHERE name like $patrn AND f.id = s.f_id GROUP BY f.id ORDER BY name ASC , avg_r DESC;';
  $result = mysqli_query($link,$q);
  if(!$result){
    print("Somthing somewhere went wrong<br>".$q.'<br>'.mysqli_error($link));
  }
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
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
    $nm='"'.$row["name"].'"';
    $type=$row["type"];
    $avg_r=$row["avg_r"];
    $avg_p=$row["avg_p"];

    $result1=mysqli_query($link,"SELECT r.name,r.veg_nonveg,r.star,r.address,r.star,s.price,r.city FROM restaurant r, serves s, food f WHERE r.id=s.r_id and f.id=s.f_id and f.name=$nm;");
    //echo "SELECT r.name,r.veg_nonveg,r.star,r.address FROM restaurant r, serves s, food f WHERE r.id=s.r_id and f.id=s.f_id and f.name=$nm;";
    echo '<div class="labelhead">Available in following Restaurants :  </div>';
    //echo mysqli_error($link);//,"SELECT r.name,r.veg_nonveg,r.star,r.address FROM restaurant r, serves s, food f WHERE r.id=s.r_id and f.id=s.f_id and f.name=;");
    while($row1 = mysqli_fetch_array($result1))
    {
      //echo '<br>';
      $nm=urlencode($row1['name']);
        echo '<div class="bodytrbg restro"><div style="background:rgba(50,50,50,0.8);border-radius: 5px;"><a href=search.php?search_type=restaurant&keyword='.$nm.'>';
        echo '<table border=0 cellpadding=2>';
        echo '<tr>';
        echo '<td  class="field name">'.$row1["name"].'  ('.$row1["veg_nonveg"].')</td>';
        $piclen = 40*$row1["star"];
        echo '<td rowspan=2 class="field starttd" ><div class="star" style="width:'.$piclen.'px;"></div></td>';
        echo '<td class="food_price" rowspan=2>₹'.$row1['price'].'</td>';
        echo '</tr><tr>';
        echo '<td colspan=2 class="field address">&nbsp;&nbsp;'.$row1["address"].', '.$row1["city"].'</td>';


        echo '</tr></table>';
        echo '</a></div></div>';
    }
  }


 ?>

 <br><br>
 </center>
 </body>
 </html>
