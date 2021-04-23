<?php

    
    if(isset($_POST['submit'])){
        $errors = [];

        $firstName = $_POST['firstName'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $idNum = $_POST['idNum'];
        $cell = $_POST['cell'];
        $question = $_POST['question'];
        $valid = true;

        $elements = array($firstName, $surname, $email, $idNum, $cell, $question);

        foreach($elements as $element){
            if(empty($element)){
                $valid = false;
                array_push($errors, "$element is empty");
            }
            elseif(strlen($idNum) < 13){
                $valid = false;
                array_push($errors, "$idNum is too short");
            }
        }

        if($valid){
            ini_set("SMTP", "smtp.afrihost.co.za");
            ini_set("smtp_port", 25);
            ini_set("sendmail_from", "no-reply@advicebot.co.za");
            $to = 'admin@advicebot.co.za';
            $subject = $_POST['subject'];
            $msg = "
            <html>
            <head>
            <title>HTML email</title>
            </head>
            <body>
            <p>First Name: " . $firstName . "</p>
            <p>Last Name: " . $surname . "</p>
            <p>Email Address: " . $email . "</p>
            <p>ID Number: " . $idNum . "</p>
            <p>Cellphone Number: " . $cell . "</p>
            <p>Question: " . $question . "</p>
            </body>
            </html>
            ";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
            $headers .= "From: <martin@advicebot.co.za>" . "\r\n"; 
            mail($to, $subject, $msg, $headers);
            header('location: ../index.php');
        }
        else {
            foreach($errors as $error){
                echo '<h2>' . $error . '</h2>';
                break;
            }
        }
        

        
    }
?>