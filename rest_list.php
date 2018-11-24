<!DOCTYPE html>
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
<div class="bodyxbg">
    <div class="bodyx">
<?php
    include("PhpMysqlConnectivity.php");
    $result=mysqli_query($link,"SELECT DISTINCT a.name,a.address,a.mobile_no,a.star,a.city,a.veg_nonveg,a.open_time,a.close_time FROM restaurant a WHERE  a.city='jabalpur' AND CAST(CURRENT_TIME() AS time) BETWEEN a.open_time AND a.close_time ORDER BY a.star DESC;");
    echo '<table border=1px>';
    echo '<th>Name</th><th>Address</th><th>Mobile No</th><th>Star</th><th>City</th><th>Veg/NonVeg</th><th>Open Time</th><th>Close Time</th>';
    while($row = mysqli_fetch_array($result))
    {
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
    }
    echo '</table>';
?>
</div>
</div>
</center>
 </body>
 </html>
