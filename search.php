<?php
    $searchby =  $_GET['search_type'];
    $file = 'search_'.$searchby.'.php';
    $name = $_GET['keyword'];
    include($file);
?>
