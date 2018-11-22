<?php
    $searchby =  $_GET['search_type'];
    $file = 'search_'.$searchby.'.php';
    $name = $_GET['keyword'];
    include($file);

    if($result->num_rows==0){
        //or any other location
        header('Location: '.'/Gourmet');
    }
?>
