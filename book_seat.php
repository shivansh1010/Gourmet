<?php 
	
	if(isset($_POST['book'])){
		book_seat();
	}
	if(isset($_POST['check'])){
		check_seat();
	}		
		
	function book_seat(){
		include('PhpMysqlConnectivity.php');
		session_start();
		$no = $_POST['no'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$r_id = $_POST['r_id'];
		$u_id = $_SESSION['u_id'];
		
		$q = "INSERT INTO `books`(`u_id`, `r_id`, `qnty`, `start_time`, `end_time`, `date`) VALUES ('$u_id','$r_id','$no', '$start_time','$end_time',CURDATE())";
		$r = mysqli_query($link,$q);       

		if ($r) {
			//Create slip of booking
			echo "done";
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
		
		$q = "SELECT SUM(`qnty`) FROM books WHERE r_id = $r_id AND start_time BETWEEN CAST('$start_time' AS TIME) AND CAST('$end_time' as TIME) OR end_time BETWEEN CAST('$start_time' AS TIME) AND CAST('$end_time' as TIME) ";
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