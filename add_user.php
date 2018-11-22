<?php

    include("PhpMysqlConnectivity.php");

    $u_id = $_POST['uname'];
    $pswd = $_POST['pswd'];
    $town = $_POST['town'];
    $mobno = $_POST['mobno'];
    
    echo "bas bhai";
    try{

        $q = "INSERT INTO `user`(`id`, `pswd`, `city`, `mobile_no`) VALUES ('$name','$pswd','$town','$mobno')";
        
        $result = mysqli_query($link,$q);
        
        
        if(!$result){
        
            $error = mysqli_error($link);
            print($error);

            if(strpos($error,"Duplicate")>=0){
               header('Location: '.'signup.php/?user_found=true');
            }
            if(strpos($error,"'mobile_no'")>0){
               header('Location: '.'signup.php/?invalid_no=true');    
            }
            
        }
        
        header('Location: '.'index.php');            
        
    }
    catch(Exception $e){
        print('Something, Somewhere, Somehow went wrong'.mysqli_error($link));
    }

    session_start();
    $_SESSION['u_id'] = $u_id;
    $_SESSION['u_city'] = $city;
    $_SESSION['u_mobno'] = $mobno;
    
?>