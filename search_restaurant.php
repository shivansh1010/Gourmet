<!DOCTYPE html>
<html>
<head>
    <title>Search Restaurants | Gourmet</title>
    <link type="text/css" rel="stylesheet" href="css/rest_list.css" />
    <link type="text/css" rel="stylesheet" href="css/search_restro.css" />
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

  if($sortby=='rating'){
    //sort by rating
    $result = mysqli_query($link,"SELECT DISTINCT a.id, a.name,a.address,a.mobile_no,a.star,a.city,a.veg_nonveg,a.open_time,a.close_time FROM restaurant a WHERE a.name = '$name'  AND a.city='jabalpur' ORDER BY a.star DESC;");
  }

  while($row = mysqli_fetch_array($result))
  {
        echo '<div class="bodytrbg restro"><div style="background:rgba(50,50,50,0.8);border-radius: 5px;">';
        echo '<table border=0 cellpadding=2>';
        echo '<tr>';
        echo '<td  class="field name">'.$row["name"].'  ('.$row["veg_nonveg"].')</td>';
        $piclen = 40*$row["star"];
        echo '<td class="field starttd" ><div class="star" style="width:'.$piclen.'px;"></div></td>';
        echo '<td class="field open">'.$row["open_time"].' - '.$row["close_time"].'</td>';
        echo '</tr><tr>';
        echo '<td colspan=2 class="field address">&nbsp;&nbsp;'.$row["address"].', '.$row["city"].'</td>';

        if (isset($_SESSION['u_id'])) {
        echo '<td rowspan=2 ><a class="styledanchor"  href="./booking.php?r_id='.$row['id'].'">Book Table</a></td>';
        }
        else {
          echo '<td rowspan=2 ><a class="styledanchor errorm">Please Login First</a></td>';
        }

        echo '</tr><tr>';
        echo '<td colspan=2 class="field mobile">&nbsp;&nbsp;'.$row["mobile_no"].'</td>';
        echo '</tr>';

        echo '</table>';
        echo '</div></div>';

    $r_id = $row["id"];
    $result1 = mysqli_query($link,"SELECT f.name, s.price, s.star FROM serves s,food f WHERE s.r_id=$r_id AND f.id=s.f_id;");

    echo '<div class="labelhead">Food Items available : </div>';
    //echo '<br><table><th>Food Name</th><th>Price</th><th>star</th>';
    while($row1 = mysqli_fetch_assoc($result1))
    {


        echo '<div class="bodytrbg food"><div style="background:rgba(50,50,50,0.8);border-radius: 5px;">';
        echo '<table border=0 cellpadding=2>';
        echo '<tr>';
        echo '<td  class="field name">'.$row1["name"].'</td>';
        $piclen = 40*$row1["star"];
        echo '<td rowspan=2 class="field starttd" ><div class="star" style="width:'.$piclen.'px;"></div></td>';
        echo '</tr><tr>';
        echo '<td class="field mobile">&nbsp;&nbsp;₹&nbsp;'.$row1["price"].'</td>';
        echo '</tr>';

        echo '</table>';
        echo '</div></div>';

    }
  }

 ?>

<br><br>
</center>
</body>
</html>
