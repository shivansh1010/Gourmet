<?php
    /*if( $_GET && $_GET['user_found'] && $_GET['user_found']==true){
    }
    if($_GET && $_GET['invalid_no']==true){
    }*/

    foreach ($_GET as $key => $value) {
        if ($key == 'user_found' && $value) {
            echo "<h1>User Exists</h1>";
        }
    	if ($key == 'invalid_no' && $value) {
            echo "<h1>Enter Valid Mobile No </h1>";
    	}
    }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up | Gourmet</title>
    <link type="text/css" rel="stylesheet" href="css/signup.css" />
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
        if (isset($_SESSION['u_id'])) {
          echo '<a href="./logout.php">Log Out</a>';
          echo '<a href="./user.php">'.$_SESSION["u_id"].'</a>';

        }
        else {
          echo '<a href="./signup.php">Signup</a>';
          echo '<a href="#login">Login</a>';
        }
      ?>
    </div>
  </div>
</div>
<div class="headerbg"></div>
<center>
    <form class="formx" action="/Gourmet/add_user.php" method="post" required >
        <!--
        <table border='1px'>
            <tr><td>Name : </td><td></td></tr>
            <tr><td>Password : </td><td></td></tr>
            <tr><td>Town </td><td><input type="text" name="town"required ></td></tr>
            <tr><td>mobile no: +91</td><td> </td></tr>
        </table>
        <input value="Submit">-->

        <label>
            <input type="text" name="name" required >
            <div class="label-text">First name</div>
        </label>
        <label>
            <input type="password" name="pswd" required >
            <div class="label-text">Password</div>
        </label>
        <label>
            <input type="text" name="town" required >
            <div class="label-text">Town</div>
        </label>
        <label>
            <input type="text" name="mobno" required >
            <div class="label-text">Mobile Number</div>
        </label>
        <button type="submit">Submit</button><br>&nbsp;

    </form>
</center>
</body>

</html>
