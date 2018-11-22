<?php
    $searchby =  $_GET['search_type'];
    $file = 'search_'.$searchby.'.php';
    $name = $_GET['keyword'];
    include($file);

// ye kya tatti ki hai, search page par aa hi nahi raha, ise comment karne par search chal ra hai
    if($result->num_rows==0){
        header('Location: '.'/Gourmet');
    }
?>
