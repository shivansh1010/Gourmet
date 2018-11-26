<!DOCTYPE html>
<html>
<head>
    <title>Restaurant | Gourmet</title>
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
        //session_start();
        include('PhpMysqlConnectivity.php');

        $r_id = $_GET['r_id'];
        $is_owner = false;
        if(isset($_SESSION['u_id'])){
            $u_id = $_SESSION['u_id'];
            $q = "SELECT * FROM owner o WHERE o.r_id = $r_id AND o.u_id = '$u_id'";

            $result = mysqli_query($link,$q);

            if($result){
                $is_owner = true;
            }
        }

		//displaying details of the restaurant
	    $q = "SELECT * FROM restaurant WHERE id = '$r_id'";
        $result = mysqli_query($link,$q);
        $restro_data = mysqli_fetch_array($result,MYSQLI_ASSOC);
		unset($restro_data['id']);

			echo '<div class="bodytrbg restro"><div style="background:rgba(50,50,50,0.8);border-radius: 5px;">';
	        echo '<table border=0 cellpadding=2>';
	        echo '<tr>';
	        echo '<td  class="field name">'.$restro_data["name"].'  ('.$restro_data["veg_nonveg"].')</td>';
	        $piclen = 40*$restro_data["star"];
	        echo '<td class="field starttd" ><div class="star" style="width:'.$piclen.'px;"></div></td>';
	        echo '<td class="field open">'.$restro_data["open_time"].' - '.$restro_data["close_time"].'</td>';
	        echo '</tr><tr>';
	        echo '<td colspan=2 class="field address">&nbsp;&nbsp;'.$restro_data["address"].', '.$restro_data["city"].'</td>';

	        if ( $is_owner) {
	        	echo '<td rowspan=2 ><a class="styledanchor"   href="add_serve_form.php?r_id='.$r_id.'">Add Item</a></td>';
	        }

	        echo '</tr><tr>';
	        echo '<td colspan=2 class="field mobile">&nbsp;&nbsp;'.$restro_data["mobile_no"].'</td>';
	        echo '</tr>';

	        echo '</table>';
	        echo '</div></div>';
/*
        foreach ($restro_data as $key => $value) {
            echo $key.' '.$value.'<br>';
        }
*/
		//displaying menu items
	    $q = "SELECT * FROM food f, serves s WHERE r_id = '$r_id' AND f_id = f.id;";
        $result = mysqli_query($link,$q);
        echo '<br>';
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            echo $row['name'].' ';
            echo $row['price'].' ';
            echo $row['discount'].' ';
            $f_id = $row['f_id'];
            if($is_owner){
                echo '<a href="./delete_item.php?r_id='.$r_id.'&f_id='.$f_id.'">Delete</a>';
            }
            echo '<br>';
        }
        echo '<br>';

		// adding item in the menu
    ?>


	<br><br>
	</center>
	</body>
	</html>
