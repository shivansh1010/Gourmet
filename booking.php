<!DOCTYPE html>
<html>
<head>
	<title>Booking | Gourmet</title>
    <?php
        session_start();
        include('PhpMysqlConnectivity.php');
        if (!isset($_SESSION['u_id'])) {
            header('Location: '.'./#login_user');
        }

        $u_id = $_SESSION['u_id'];
        $u_name = $_SESSION['u_name'];
        if (!isset($_GET['r_id'])) {
            header('Location: '.'./#search');
        }
        $r_id = $_GET['r_id'];
        $r_name = mysqli_fetch_row(mysqli_query($link,"SELECT name FROM restaurant WHERE id = $r_id"))[0];
        

        //FIND AVALABLE SEATS FROM BOOKS
        //$avlbl_seats = mysqli_fetch_row(mysqli_query($link,"SELECT name FROM restaurant WHERE id = $r_id"))[0];
    ?>
</head>
<body>
    <form action='book_seat.php' method="post">
        <?php 
            echo '<div> Restaurant :-'.$r_name.'</div>';
            echo '<div> User :- '.$u_name.'</div>';
        ?>
         Time <input type="time" value="time">
         <input type="submit" value="Check" onclick="check()">
         <?php
            if (isset($_GET['s_no'])) {
                echo '<div>'.$_GET['s_no'].' seats are avalable</div>';
            }
         ?>
         <div> Number of seats <input type="number" require></div>
         <input type="submit" value="Book" onclick="book()">
    </form>
</body>
</html>