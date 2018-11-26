<?php
    $link = mysqli_connect('localhost','root','','gourmet');
    if(!$link){
        print('cant connect to db');
    }

    /*$db = mysqli_select_db($link,'gourmet');
    if(!$db){
        echo('cant connect to db'. mysqli_error($link));
    }*/

    print('done');
?>
