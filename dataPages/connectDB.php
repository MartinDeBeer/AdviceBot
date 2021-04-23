<?php

$host = '127.0.0.1';
$username = 'martin';
$pass = 'Martin323';
$db = 'Advicebot';

$conn = mysqli_connect($host, $username,$pass, $db, '3306');

if(!$conn) {
    echo "Connection Failed: " . mysqli_connect_error();
}



?>
