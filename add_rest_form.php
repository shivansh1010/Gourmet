<!DOCTYPE html>
<html>
<head>
	<title>Create Restaurant | Gourmet</title>
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
    <form class="formx" action='add_rest.php' method='post'>
		<div class="formbgcolor">
            <label>
                <input type='text' name='name' required>
                <div class="label-text">Restaurant Name</div>
            </label>
            <label>
                <input type='text' name='address' required>
                    <div class="label-text">Address</div>
            </label>
            <label>
                <input type='text' name='twon' required>
                    <div class="label-text">Town</div>
            </label>
            <label>
                <input type='text' name='star' required>
                <div class="label-text">Restaurant Rating</div>
            </label>
            <label>
                <input type='text' name='mobile_no' required>
                <div class="label-text">Contact Number</div>
            </label>
            <label>
                <input class='time' type=time name='open_time' required>
                <div class="label-text">Opening Time</div>
            </label>
            <label>
                <input class='time' type='time' name='close_time' required>
                <div class="label-text">Closing Time</div>
            </label>
            <label>
                <select name='veg/nonveg' class='selectop'>
                    <option value='Veg'>Veg</option>
                    <option value='NonVeg'>Non Veg</option>
                    <option value='Both'>Both</option>
                </select>
            </label>
            <label>
                <input type='text' name='no' required>
                <div class="label-text">No of Seats for Booking</div>
            </label>
            <br>
            <button type='submit'>Create Restaurant</button><br><br>
		</div>
    </form>
</center>
<br><br>
</body>

</html>
