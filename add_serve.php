<?php 

    include("PhpMysqlConnectivity.php");

    $r_id = $_POST['r_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $vnv = $_POST['veg/nonveg'];

    $q = "SELECT id FROM food WHERE name = '$name'";
    $result = mysqli_query($link, $q);
    $result = mysqli_fetch_array($result);
    
    if(!$result){

        $q = "INSERT INTO `food`(`name`, `type`) VALUES ('$name','$vnv')";
        $result = mysqli_query($link, $q);

        if(!$result){
            echo 'something somewhere went wrong <br>'.$q.'<br>'.mysqli_error($link) ;        
            
        }

        $q = "SELECT LAST_INSERT_ID();";
        $f_id = mysqli_fetch_array(mysqli_query($link,$q))[0];
    }
    else{
        $f_id = $result['id'];
    }

    $q = "INSERT INTO `serves`(`r_id`, `f_id`, `star`, `price`, `discount`) VALUES ($r_id,$f_id,3,$price,$discount)";
    $result = mysqli_query($link, $q);    
    if($result){
        echo 'done';
        header('Location: '.'restaurant.php?r_id='.$r_id);
    }
    else {
        echo '<br><h3>Something somewhere went wrong</h3> <br>'.$q.'<br>'.mysqli_error($link) ;
    }

?>