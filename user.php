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

    // echo $_SESSION['u_name']; have to work on this
    echo $_SESSION['u_id'].'<br>';
    echo $_SESSION['u_city'].'<br>';
    echo $_SESSION['u_mobno'].'<br>';
    echo $_SESSION['u_name'].'<br>';

    $id = $_SESSION['u_id'];

	$q = "SELECT r.id, r.name, r.address, r.city FROM restaurant r, owner o WHERE '$id' = o.u_id AND o.r_id = r.id";
	//print($q);
    $result = mysqli_query($link,$q);

    while($row = mysqli_fetch_row($result)){
		echo $row[1].' - '.$row[2].' - '.$row[3].' - ';
		echo '<a href="./restaurant.php?r_id='.$row[0].'">Edit Menu</a><br>';
	}
  echo '<a href="./add_rest_form.php?u_id="'.$id.'>Add restaurant</a>';
  
  echo '<br>Booking status';
	$q = "SELECT * FROM books WHERE '$id' = u_id ORDER BY date DESC";
  $result = mysqli_query($link,$q);
  if(!$result){
    print("Somthing somewhere went wrong<br>".$q.'<br>'.mysqli_error($link));
  }

  echo '<table>';
  while( $row = mysqli_fetch_row($result) ){
    echo '<tr>';
    foreach($row as $key => $value){
      echo '<td>'.$value.'</td>';
    }
    echo '</tr>';
  }
  echo '</table>';
  ?>
</div>
 <br><br>
 </center>
 </body>
 </html>
