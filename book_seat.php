<?php 
	print_r($_POST);

	echo '<br>' ;

	session_start();
		
		check_seat();
		
		function book_seat(){
			
		};
		function check_seat(){

			include('PhpMysqlConnectivity.php');
			
			$no = $_POST['no'];
			$start_time = $_POST['start_time'];
			$end_time = $_POST['end_time'];
			$r_id = $_POST['r_id'];
		
			$q = "SELECT SUM(`qnty`) FROM books WHERE r_id = $r_id AND start_time BETWEEN CAST('$start_time' AS TIME) AND CAST('$end_time' as TIME) OR end_time BETWEEN CAST('$start_time' AS TIME) AND CAST('$end_time' as TIME) ";
			print($q);
			$r = mysqli_query($link,$q);        
			$r = mysqli_fetch_array($r);
			print_r($r);

			if($r[0] >= $no){
				$status = true;
			}
			else{
				$status = false;
			}

			echo '<form id="myForm" action="booking.php" method="post">';
			echo '<input type = "hidden" name = "status" value = '.$status.'></form>';
			echo '<script type="text/javascript">
					document.getElementById("myForm").submit();
				  </script>"';
		};
	?>