<?php

$host = '192.168.8.172';
$username = 'root';
$pass = '';
$db = 'advicebot';

$conn = mysqli_connect($host, $username, $pass, $db, '3306');

if(!$conn) {
    echo "Connection Failed: " . mysqli_connect_error();
}



?>
