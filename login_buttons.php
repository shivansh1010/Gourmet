<?php
    session_start();
    if (isset($_SESSION['u_id'])) {
        ///echo '<a href="index.php"><div style="position:absolute;width:230px;height:150px;z-index:100;left:-330px;"></div></a>';
        echo '<a href="./logout.php">Log Out</a>';
        echo '<a href="./user.php">'.$_SESSION["u_id"].'</a>';

      }
      else {
        echo '<a href = "./signup.php">Signup</a>';
        echo '<a href = "./#login_user">Login</a>';
      }
?>
