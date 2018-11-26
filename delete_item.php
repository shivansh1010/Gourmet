<?php  

    include('PhpMysqlConnectivity.php');

    $r_id = $_GET['r_id'];
    $f_id = $_GET['f_id'];

    $q = "DELETE FROM `serves` WHERE r_id = $r_id AND f_id = $f_id";
    $result = mysqli_query($link,$q);
   
    if(!$result){
       echo 'Something Somewher went wrong<br>'.$q.'<br>'.mysqli_error($link) ;
    }
    else{
        header('Location: '.'restaurant.php?r_id='.$r_id);
    }
?>