<!DOCTYPE html>
<html>
<head>
	<title>User | Gourmet</title>
</head>
	<?php
		session_start();
	?>
<body>
	<?php
    if ( !isset($_SESSION['u_id'])) {
      header('Location: '.'/Gourmet#login');
    }

    // echo $_SESSION['u_name']; have to work on this
    echo $_SESSION['u_id'].'<br>';
    echo $_SESSION['u_city'].'<br>';
    echo $_SESSION['u_mobno'].'<br>';

  ?>
</body>
</html>
