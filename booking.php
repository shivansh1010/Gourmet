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

        
        if(isset($_POST['r_id'])){
            $r_id = $_POST['r_id'];
        }
        else if(isset($_GET['r_id'])){
            $r_id = $_GET['r_id'];
        }
        else{
            header('Location: '.'./#search');
        }


        $r_name = mysqli_fetch_row(mysqli_query($link,"SELECT name FROM restaurant WHERE id = $r_id"))[0];
    ?>
</head>
<body>
    <?php 
        echo '<div> Restaurant :-'.$r_name.'</div>';
        echo '<div> User :- '.$u_name.'</div>';
    ?>
    <form action='./book_seat.php' method="POST">
    <?php  
            echo '<input type = "hidden" name = "r_id" value = '.$r_id.'>';
            
            if (isset($_POST['res']) && $_POST['res']) {       
                echo 'Number of seats <input type="number" name="no" min=1 value='.$_POST['no'].' readonly ><br>';
                echo 'Time <input type="time" name="start_time" value='.$_POST['st'].' readonly >';
                echo '<input type="time" name="end_time" value='.$_POST['et'].' readonly ><br>';
                echo 'Seat Avalable Book Now !!';
                echo '<input type="submit" value="Book" name="book">';
            } 
            else{
                if(isset($_POST['res'])){
                    echo 'Seats are not avalable';
                }
                echo 'Number of seats <input type="number" name="no" min=1 required ><br>';
                echo 'Time <input type="time" name="start_time" required>';
                echo '<input type="time" name="end_time" required><br>';
                echo '<input type="submit" value="Check" name="check">';
            }
        ?>
    </form>
</body>
</html>