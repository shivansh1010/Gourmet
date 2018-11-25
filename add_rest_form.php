<!DOCTYPE html>
<html>
<head>
    <title>Groumet</title>
</head>
<body> 
    <form action='add_rest.php' method='post'>
        <br>restaruant name 
        <input type='text' name='name' required>
        <br>address 
        <input type='text' name='address' required>
        <br>twon 
        <input type='text' name='twon' required>
        <br>restaruant rating 
        <input type='text' name='star' required>
         <br>restaruant contact no 
        <input type='text' name='mobile_no' required>
         <br>open time 
        <input type=time name='open_time' required>
         <br>close time 
        <input type='time' name='close_time' required>
         
        <select name='veg/nonveg'>
            <option value='Veg'>Veg</option>
            <option value='NonVeg'>NonVeg</option>
            <option value='Both'>Both</option>
        </select>
        <button type='submit'>Create Restaruant</button>
    </form>;
</body>
</html>
 
