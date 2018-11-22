<!DOCTYPE html>
<html>
<head>
    <title> Cuisines | Gaurmet</title>
</head>
<body>

<?php
include("PhpMysqlConnectivity.php");
$result=mysqli_query($link,"SELECT f.name, f.type, AVG(s.price) avg_p, AVG(s.star) avg_r FROM food f, serves s WHERE f.id = s.f_id GROUP BY f.id ORDER BY avg_r DESC , avg_p ;");
print(mysqli_error($link));
echo '<table>';
echo '<th>Name</th><th>Avg Price</th><th>Avg Rating</th><th>Veg/NonVeg</th>';

while($row = mysqli_fetch_array($result))
{
    echo '<tr>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['avg_p'].'</td>';
    echo '<td>'.$row['avg_r'].'</td>';
    echo '<td>'.$row['type'].'</td>';
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>
