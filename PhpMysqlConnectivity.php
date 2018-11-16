<?php
$database = 'sql12265642';
$username = 'sql12265642';
$password = 'Slv4AuvMsV';
$hostname = 'sql12.freesqldatabase.com';

$link = mysqli_connect($hostname, $username, $password);
if (!$link) {
    die('Not connected : ' . mysqli_error($link));
}
?>
