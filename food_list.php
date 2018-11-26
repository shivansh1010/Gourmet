<html>
<head>
    <title>Cuisines | Gaurmet</title>
    <link type="text/css" rel="stylesheet" href="css/food_list.css" />
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
        $result=mysqli_query($link,"SELECT f.name, f.type, AVG(s.price) avg_p, AVG(s.star) avg_r FROM food f, serves s WHERE f.id = s.f_id GROUP BY f.id ORDER BY name ASC , avg_r DESC;");

        while($row = mysqli_fetch_array($result))
        {
            $nm = $row['name'];

            echo '<div class="bodytrbg"><div style="background:rgba(50,50,50,0.8);border-radius: 5px;">';
            echo '<table border=0 cellpadding=2>';
            echo '<tr>';
            echo '<td  class="field name">'.$row["name"].'  ('.$row["type"].')</td>';
            $piclen = 40*$row["avg_r"];
            echo '<td rowspan=2 class="field starttd" ><div class="star" style="width:'.$piclen.'px;"></div></td>';
            echo '<td rowspan=2 width="230px" ><a href="./search.php?keyword='.$nm.'&search_type=food">View Restaurants</a></td>';
            echo '</tr><tr>';
            echo '<td class="field mobile">&nbsp;&nbsp;₹&nbsp;'.floor($row["avg_p"]).'</td>';
            echo '</tr>';

            echo '</table>';
            echo '</div></div>';
        }
    ?>
<br><br>
</center>
 </body>
 </html>
