<?php 
    session_start();
    include("../dataPages/connectDB.php");


    // Permission
    if(isset($_POST['permission'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $idNumber = $_POST['idNumber'];
        $personal = $_POST['personal'];
        if($personal == 'no'){
            $rep = $_POST['rep'];
        }
        $to = 'root@localhost';
        $subject = "Consent to get information from Astute";
        $msg = "
        <html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <p>First Name: " . $firstName . "</p>
        <p>Last Name: " . $lastName . "</p>
        <p>ID Number: " . $idNumber . "</p>
        <p>Personal Capacity: " . $personal . "</p>
        <p>Representing: " . $rep . "</p>
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: <martin@advicebot.co.za>" . "\r\n"; 
        mail($to, $subject, $msg, $headers);
        header('location: ../report.php'); 
    }

?>