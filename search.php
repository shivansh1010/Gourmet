<?php
    //search php to find serach result
    /*
     *  if food is selected, head over to search_food.php
     *  else redirect to search_restaurant.php
     *
     */
     if($_POST['search_type']=="food")header("Location: search_food_sort_rating.php");
     else header("Location: search_restaraunt_sort_rating.php");
?>
