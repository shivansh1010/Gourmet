<?php
    session_start();
    if (isset($_SESSION['u_id'])) {
        echo '<a href="./logout.php">Log Out</a>';
        echo '<a href="./user.php">'.$_SESSION["u_id"].'</a>';

      }
      else {
        echo '<a href = "./signup.php">Signup</a>';
        echo '<a href = "./#login_user">Login</a>';
      }
?>
