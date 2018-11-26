<?php
    $link = mysqli_connect('localhost','root','','gourmet');
    if(!$link){
        $link = mysqli_connect('localhost','meru','','gourmet');
    }
    if(!$link){
        print('cant connect to db');
    }
?>
