<?php

// $host = 'quake.aserv.co.za';
// $username = 'advicdxe_martin';
// $pass = 'Y9Pywjsh42tAW2s';
// $db = 'advicdxe_advicebot';

$host = 'localhost';
$username = 'root';
$pass = '';
$db = 'advicebot';

$conn = mysqli_connect($host, $username,$pass, $db, '3306');

if(!$conn) {
    echo "Connection Failed: " . mysqli_connect_error();
}



?>
