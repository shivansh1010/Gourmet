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
          include('login_buttons.php');
        ?>
    </div>
  </div>
</div>
<div class="headerbg"></div>
<center>
    <form class="formx" action="/Gourmet/add_user.php" method="post" required >
        <label>
            <input id="full_name" type="text" name="name" required >
            <div class="label-text">Full Name</div>
        </label>
        <label>
            <input id="id" type="text" name="uname" required >
            <div class="label-text">User Id</div>
            <?php
                if (isset($_GET['user_found'])) {
                    echo '<div>User Id Exist, Try Diffrent</div>';
                }
            ?>
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
			<div>
            <span class="input-group-addon">+91</span>
            <input type="text" name="mobno" class="mobno" required>
            <div class="label-text">&nbsp;&nbsp;&nbsp;&nbsp;Mobile Number</div>
            <?php
                if(isset($_GET['invalid_no'])){
                    echo '<div>Invalid Number or Number Exist</div>' ;
                }
            ?>
		</div>
        </label>
        <button type="submit">Sign Up</button><br>&nbsp;

    </form>
</center>
&nbsp;
</body>

</html>
