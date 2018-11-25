<!DOCTYPE html>
<html>
<head>
	<title>Restaurant | Gourmet</title>
</head>
<body>
    <?php 
        session_start();
        include('PhpMysqlConnectivity.php');

        $r_id = $_GET['r_id'];
        $is_owner = false;
        if(isset($_SESSION['u_id'])){
            $u_id = $_SESSION['u_id'];
            $q = "SELECT * FROM owner o WHERE o.r_id = $r_id AND o.u_id = '$u_id'";
            
            $result = mysqli_query($link,$q);

            if($result){
                $is_owner = true;
            }
        }
	    $q = "SELECT * FROM restaurant WHERE id = '$r_id'";
        $result = mysqli_query($link,$q);
        $restro_data = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        unset($restro_data['id']);
        foreach ($restro_data as $key => $value) {
            echo $key.' '.$value.'<br>';
        }

	    $q = "SELECT * FROM food f, serves s WHERE r_id = '$r_id' AND f_id = f.id;";
        $result = mysqli_query($link,$q);
        echo '<br>';
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            echo $row['name'].' ';
            echo $row['price'].' ';
            echo $row['discount'].' ';
            if($is_owner){
                //CREATE POST REQUEST HERE 
                echo '<a>Delete</a>';
            }
            echo '<br>';
        }
        echo '<br>';

        if( $is_owner ) {
            //CREATE POST REQUEST HERE  ALSO
            echo '<a href="add_serve_form.php?r_id='.$r_id.'">Add Item<a>';
        }
    ?>
	
</body>
</html>