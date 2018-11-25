<?php

    include("PhpMysqlConnectivity.php");

    $id = $_POST['uname'];
    $name = $_POST['name'];
    $pswd = $_POST['pswd'];
    $town = $_POST['town'];
    $mobno = $_POST['mobno'];

    print_r($_POST);
    //echo "bas bhai";
    try{

        $q = "INSERT INTO `user`(`id`,`name`, `pswd`, `city`, `mobile_no`) VALUES ('$id','$name','$pswd','$town','$mobno')";

        $result = mysqli_query($link,$q);


        if(!$result){

            $error = mysqli_error($link);
            print($error);

            if(strpos($error,"'mobile_no'")>0){
               header('Location: '.'signup.php?invalid_no=true');
            }
            else if(strpos($error,"Duplicate")>=0){
               header('Location: '.'signup.php?user_found=true');
            }
        }else{
            session_start();
            $_SESSION['u_id'] = $id;
            $_SESSION['u_name'] = $name;
            $_SESSION['u_city'] = $town;
            $_SESSION['u_mobno'] = $mobno;
            header('Location: '.'index.php');
        }

    }
    catch(Exception $e){
        print('Something, Somewhere, Somehow went wrong'.mysqli_error($link));
    }


?>
