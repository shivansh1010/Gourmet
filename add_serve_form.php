<!DOCTYPE html>
<html>
<head>
	<title>Add Food Item | Gourmet</title>
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
<form class="formx" method="post" action="./add_serve.php">
	<div class="formbgcolor">
		<label>
			<input type="text" name="name" required>
			<div class="label-text">Food Item Name</div>
		</label>
		<label>
			<input type="numner" name="price" required>
			<div class="label-text">Price</div>
		</label>
		<label style="color:white;">
			&nbsp;&nbsp;&nbsp;<input type="number" name="discount" value=0 min=0 max=99>%
			<div class="label-text">Discount</div>
		</label>
		<label>
			<select name='veg/nonveg' class='selectop'>
		            <option value='Veg'>Veg</option>
		            <option value='NonVeg'>Non Veg</option>
		    </select>
		</label>
		<?php
			echo '<input type="hidden" name="r_id" value="'.$_GET['r_id'].'">';
		?>
		<button type='submit'>Add Food Item</button><br><br>
	</div>
</form>

</center>
<br><br>
</body>

</html>
