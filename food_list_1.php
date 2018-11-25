<html>
<head>
    <title>Restaurants | Gaurmet</title>
    <link type="text/css" rel="stylesheet" href="css/rest_list.css" />
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
        $result=mysqli_query($link,"SELECT f.name, f.type, AVG(s.price) avg_p, AVG(s.star) avg_r FROM food f, serves s WHERE f.id = s.f_id GROUP BY f.id ORDER BY avg_r DESC , avg_p ;");
        //echo '<table border=1px>';
        //echo '<th>Name</th><th>Address</th><th>Mobile No</th><th>Star</th><th>City</th><th>Veg/NonVeg</th><th>Open Time</th><th>Close Time</th>';
        while($row = mysqli_fetch_array($result))
        {
            echo '<div class="bodytrbg"><div style="background:rgba(70,70,70,0.8);border-radius: 5px;">';
            echo '<table border=0 cellpadding=2>';
            echo '<tr>';
            echo '<td  class="field name">'.$row["name"].'  ('.$row["type"].')</td>';
            $piclen = 40*$row["avg_r"];
            echo '<td class="field starttd" ><div class="star" style="width:'.$piclen.'px;"></div></td>';
            //echo '<td class="field open">'.$row["open_time"].' - '.$row["close_time"].'</td>';
            //echo '</tr><tr>';
            //echo '<td colspan=2 class="field address">&nbsp;&nbsp;'.$row["address"].', '.$row["city"].'</td>';
            echo '<td rowspan=2 ><a >Book Table</a></td>';
            echo '</tr><tr>';
            echo '<td colspan=2 class="field mobile">&nbsp;&nbsp;'.$row["avg_p"].'</td>';
            echo '</tr>';

            echo '</table>';
            echo '</div></div>';
            //echo '<br><br>';

        }
        //echo '</table>';
    ?>
<br><br>
</center>
 </body>
 </html>
