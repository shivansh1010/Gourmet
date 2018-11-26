<!DOCTYPE html>
<html>
<head>
	<title>Sign Up | Gourmet</title>
    <link type="text/css" rel="stylesheet" href="css/signup.css" />
	<style>

	a.styledanchor {
		text-align: center;
		vertical-align: middle;
		background: rgba(0, 0, 0, .2);
		/*border-radius: 3px;*/
		border: 2px solid #fff;
		font-family: "Roboto", sans-serif;
		font-style: normal;
		font-size: 20px;
		position: relative;
		border: 0;
		padding: 8px;
		height: 25px;
		width: 200px;
		color: #fff;
		background: rgba(30, 25, 20, 0.6);
		border: 2px solid #fff;
		transition: all 0.2s ease-in-out;
		text-decoration: none;
		/*border-radius: 0 3px 3px 0;*/
	}
	a.styledanchor:hover {
		background: #fff;
		color: #444;
	}

	a.styledanchor:active {
		box-shadow: 0px 0px 12px 0px rgba(225, 225, 225, 1);
	}

	a.styledanchor:focus {
		outline: 0;
	}
	</style>
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

	if(isset($_POST['book'])){
		book_seat();
	}
	if(isset($_POST['check'])){
		check_seat();
	}

	function book_seat(){
		include('PhpMysqlConnectivity.php');
		//session_start();
		$no = $_POST['no'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$r_id = $_POST['r_id'];
		$r_name = $_POST['r_name'];
		$u_id = $_SESSION['u_id'];
		$u_name = $_SESSION['u_name'];

		$q = "INSERT INTO `books`(`u_id`, `r_id`, `qnty`, `start_time`, `end_time`, `date`) VALUES ('$u_id','$r_id','$no', '$start_time','$end_time',CURDATE())";
		$r = mysqli_query($link,$q);

		if ($r) {
			echo ' <form action=\'\' method="POST" class="formx"><div class="formbgcolor">';

			echo '<br><label><input class="readonly" type="number" name="no" min=1 value='.$no.' readonly ><div class="label-text">Seats required</div></label>';
			echo '<label><input class="readonly" type="time" name="start_time" value='.$start_time.' readonly ><div class="label-text">Start Time</div></label> ';
			echo '<label><input class="readonly" type="time" name="end_time" value='.$end_time.' readonly ><div class="label-text">End Time</div></label>';
			echo '<br><div style="color:rgba(100, 255, 65, 1);">Seats Booked !!</div><br>';
			echo '<a class="styledanchor" href="index.php">Home</a><br><br>';

			echo '</div></form>';
		}
		else {
			echo "Somthing Somewhere is wrong";
		}
	};

	function check_seat(){

		include('PhpMysqlConnectivity.php');

		$no = $_POST['no'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$r_id = $_POST['r_id'];

		$q = "SELECT SUM(`qnty`) FROM books WHERE r_id = $r_id AND date = CURDATE() AND start_time BETWEEN CAST('$start_time' AS TIME) AND CAST('$end_time' as TIME) OR end_time BETWEEN CAST('$start_time' AS TIME) AND CAST('$end_time' as TIME) ";
		$r = mysqli_query($link,$q);
		$r = mysqli_fetch_array($r);
		$r[0] += 0;
		$st = $r[0] >= $no ? 'true' : 'false';

		echo '<form id="myForm" action="./booking.php" method="post">';
		echo '<input type = "hidden" name = "res" value = '.(string)$st.'>';
		echo '<input type = "hidden" name = "no" value = '.$no.'>';
		echo '<input type = "hidden" name = "st" value = '.$start_time.'>';
		echo '<input type = "hidden" name = "et" value = '.$end_time.'>';
		echo '<input type = "hidden" name = "r_id" value = '.$r_id.'></form>';
		echo '<script type="text/javascript">
				document.getElementById("myForm").submit();
			</script>"';
		};
?>

</center>
<br><br>
</body>

</html>
