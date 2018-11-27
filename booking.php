<!DOCTYPE html>
<html>
<head>
	<title>Sign Up | Gourmet</title>
    <link type="text/css" rel="stylesheet" href="css/signup.css" />
</head>

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
    <?php
        //session_start();
        include('PhpMysqlConnectivity.php');
        if (!isset($_SESSION['u_id'])) {
            header('Location: '.'./#login_user');
        }

        $u_id = $_SESSION['u_id'];
        $u_name = $_SESSION['u_name'];

        if(isset($_POST['r_id'])){
            $r_id = $_POST['r_id'];
        }
        else if(isset($_GET['r_id'])){
            $r_id = $_GET['r_id'];
        }
        else{
            header('Location: '.'./#search');
        }

        $result = mysqli_query($link,"SELECT * FROM restaurant r, seats s WHERE r.id = $r_id AND r.id = s.r_id");
        $result = mysqli_fetch_row($result);
        $r_name = $result[1];
        $r_seats = $result[10];
        $r_address = $result[2];
    ?>
    <?php
    ?>
    <form action='./book_seat.php' method="POST" class="formx">
		<div class="formbgcolor">
    <?php
	/*
        echo '<div> Name : '.$r_name.'</div>';
        echo '<div> Total no of seats : '.$r_seats.'</div>';
        echo '<div> Address : '.$r_address.'</div>';

        echo '<br><div> User :- '.$u_name.'</div>';*/
        echo '<br>';
            echo '<input type = "hidden" name = "r_id" value = '.$r_id.'>';
            echo '<input type = "hidden" name = "r_name" value = '.$r_name.'>';

            if (isset($_POST['res']) && $_POST['res']=='true') {
                echo '<label><input class="readonly" type="number" name="no" min=1 value='.$_POST['no'].' readonly ><div class="label-text">Seats required</div></label>';
                echo '<label><input class="readonly" type="time" name="start_time" value='.$_POST['st'].' readonly ><div class="label-text">Start Time</div></label> ';
                echo '<label><input class="readonly" type="time" name="end_time" value='.$_POST['et'].' readonly ><div class="label-text">End Time</div></label>';
                echo '<br><div style="color:rgba(100, 255, 65, 1);">Seats are Available. Book Now !!</div>';
                echo '<button type="submit" value="Book" name="book">Book Table</button><br><br>';
            }
            else{
                if(isset($_POST['res'])){
                    echo 'Seats are not available.';
                }
                echo '<label><input type="number" name="no" min=1 max='.$r_seats.' value=1 required ><div class="label-text">Seats required</div></label>';
                echo '<label><input class="readonly time" type="time" name="start_time" required><div class="label-text">Start Time</div></label>';
                echo '<label><input class="readonly time" type="time" name="end_time" required><div class="label-text">End Time</div></label>';
                echo '<button type="submit" value="Check" name="check">Check Availability</button><br><br>';
            }
    ?>
		</div>
    </form>
</center>
<br><br>
</body>

</html>
