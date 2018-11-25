<?php 

    include("PhpMysqlConnectivity.php");

    $r_id = $_POST['r_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];

    $q = "SELECT id FROM food WHERE name = '$name'";
    $result = mysqli_query($link, $q);

    if(!$result){
        //add food
        //and get f_id
    }
    else{
        $f_id = mysqli_fetch_array($result,MYSQLI_ASSOC)['id'];
    }

    $q = "INSERT INTO `serves`(`r_id`, `f_id`, `star`, `price`, `discount`) VALUES ($r_id,$f_id,3,$price,$discount)";
    $result = mysqli_query($link, $q);    
    if($result){
        echo 'done';
        header('Location: '.'restaurant.php?r_id='.$r_id);
    }
    else {
        echo 'something somewhere went wrong <br>'.$q.'<br>'.mysqli_error($link) ;
    }

?>