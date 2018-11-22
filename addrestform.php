<?php
echo "
<form  name='addres' action='add_serve.php' method='get'>
    <p><br>restaruant name</p>
    <input type='text' name='name' required>
    <p><br>address</p>
    <input type='text' name='address' required>
    <p><br>city</p>
    <input type='text' name='city' required>
    <p><br>restaruant rating</p>
    <input type='text' name='star' required>
    <p><br>restaruant contact no</p>
    <input type='text' name='mobile_no' required>
    <p><br>open time</p>
    <input type='text' name='open_time' required>
    <p><br>close time</p>
    <input type='text' name='close_time' required>
    <p><br>dishes offered</p>
    <input type='text' name='num' required>
    <br>
    <select name='veg/nonveg'>
        <option value='veg'>VEG</option>
        <option value='nonveg'>NONVEG</option>
        <option value='both'>BOTH</option>
    </select>
    <button type='submit'>SEARCH</button>
</form>";
 ?>
