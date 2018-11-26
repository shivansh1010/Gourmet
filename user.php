<!DOCTYPE html>
<html>
<head>
    <title>User Profile | Gourmet</title>
    <link type="text/css" rel="stylesheet" href="css/rest_list.css" />
    <link type="text/css" rel="stylesheet" href="css/user.css" />
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
<div style="color:white;">
	<?php
	//session_start();
	include('PhpMysqlConnectivity.php');

    if ( !isset($_SESSION['u_id'])) {
      header('Location: '.'/Gourmet#login');
    }
        $id = $_SESSION['u_id'];

    echo '<br>';
  //echo "$nm";
  echo '<div class="bodytrbg"><div style="background:rgba(50,50,50,0.8);border-radius: 5px;">';
  echo '<table border=0 cellpadding=2>';

  echo '<tr>';
  echo '<td class="field"><div class="field name">'.$_SESSION['u_name'].'</div><div class="userid">  ('.$_SESSION['u_id'].')</div></td>';
  echo '<td rowspan=3 style="padding-right: 25px;"><a class="styledanchor" href="./add_rest_form.php?u_id="'.$id.'>Add restaurant</a></td>';
  echo '</tr><tr>';
  echo '<td class="field city">&nbsp;&nbsp;&nbsp;&nbsp;City : '.$_SESSION['u_city'].' </td>';
  echo '</tr><tr>';
  echo '<td class="field mobile">&nbsp;&nbsp;&nbsp;&nbsp;Mobile : +91 '.$_SESSION['u_mobno'].' </td>';
  echo '</tr>';

  echo '</table>';
  echo '</div></div>';

    // echo $_SESSION['u_name']; have to work on this
    echo '<br>';


	$q = "SELECT r.id, r.name, r.address, r.city, r.star, r.veg_nonveg FROM restaurant r, owner o WHERE '$id' = o.u_id AND o.r_id = r.id ORDER BY r.name;";
	//print($q);
    $result = mysqli_query($link,$q);
    echo '<div class="labelhead">Registered restaurants : </div>';

    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

        $nm=$row['name'];
        echo '<div class="bodytrbg restro"><div style="background:rgba(50,50,50,0.8);border-radius: 5px;"><a href=search.php?search_type=restaurant&keyword='.$nm.'>';
        echo '<table border=0 cellpadding=2>';
        echo '<tr>';
        echo '<td  class="field name">'.$row["name"].'  ('.$row["veg_nonveg"].')</td>';
        $piclen = 40*$row["star"];
        echo '<td rowspan=2 class="field starttd" ><div class="star" style="width:'.$piclen.'px;"></div></td>';
        echo '<td rowspan=2 width="230px" ><a class="styledanchor"  href="./restaurant.php?r_id='.$row['id'].'">Edit Menu</a></td>';
        echo '</tr><tr>';
        echo '<td colspan=2 class="field address">&nbsp;&nbsp;'.$row["address"].', '.$row["city"].'</td>';
        echo '</tr></table>';
        echo '</a></div></div>';
	}

    $q = "SELECT r.name,qnty,start_time,end_time,date FROM books b, restaurant r WHERE '$id' = b.u_id AND r.id = b.r_id ORDER BY date DESC";
  $result = mysqli_query($link,$q);

  echo '<br><div class="labelhead">Booking Status : </div>';
  if(!$result){
    print("Somthing somewhere went wrong<br>".$q.'<br>'.mysqli_error($link));
  }

  while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ){

      echo '<div class="bodytrbg restro"><div style="background:rgba(50,50,50,0.8);border-radius: 5px;">';
      echo '<table border=0 cellpadding=2>';

      echo '<tr>';
      echo '<td class="field"><div class="field name">'.$row["name"].'</div><div class="userid">  ('.$row['date'].')</div></td>';
      echo '</tr><tr>';
      echo '<td class="field city">&nbsp;&nbsp;&nbsp;&nbsp;Seats : '.$row['qnty'].' </td>';
      echo '</tr><tr>';
      echo '<td class="field mobile" style="text-transform:none;">&nbsp;&nbsp;&nbsp;&nbsp;Time : '.$row['start_time'].' to '.$row['end_time'].' </td>';
      echo '</tr>';

      echo '</table>';
      echo '</div></div>';

        // echo $_SESSION['u_name']; have to work on this


  }
  ?>
</div>
 <br><br>
 </center>
 </body>
 </html>
