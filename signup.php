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
    <link type="text/css" rel="stylesheet" href="css/common.css" />
</head>

<body>
	<form action="add_user.php" method="post">
		name <input type="text" name="name"><br>
		password <input type="text" name="pswd"><br>
		Town <input type="text" name="town"><br>
        mobile no: +91 <input type="text" name="mobno"><br>
        <input type="submit" value="Submit">
	</form>
</body>

</html>
