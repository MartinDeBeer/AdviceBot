<?php 
    session_start();
    include("../../connectDB.php");

    // Schedule upload
    if(isset($_POST['submitSchedule'])){
        $userId = $_SESSION['autoID'];
        $select = "SELECT * FROM users WHERE autoID = '$userId'";
        $result = mysqli_query($conn, $select);
        $row = mysqli_fetch_array($result);
        $newFile = $row['firstName'] . "schedule.pdf";
        $emailAddress = $row['emailAddress'];


        // Recipient 
        $to = 'root@localhost'; 

        // Sender 
        $from = 'sender@example.com'; 
        $fromName = 'CodexWorld'; 

        // Email subject 
        $subject = 'PHP Email with Attachment by CodexWorld';  

        // Attachment file 
        $file = "../upload/" . $newFile; 

        // Email body content 
        $htmlContent = ' 
        <h3>PHP Email with Attachment by CodexWorld</h3> 
        <p>This email is sent from the PHP script with attachment.</p> 
        '; 

        // Header for sender info 
        $headers = "From: $fromName"." <".$from.">"; 

        // Boundary  
        $semi_rand = md5(time());  
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  

        // Headers for attachment  
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

        // Multipart boundary  
        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
        "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  

        // Preparing attachment 
        if(!empty($file) > 0){ 
        if(is_file($file)){ 
            $message .= "--{$mime_boundary}\n"; 
            $fp =    @fopen($file,"rb"); 
            $data =  @fread($fp,filesize($file)); 

            @fclose($fp); 
            $data = chunk_split(base64_encode($data)); 
            $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
            "Content-Description: ".basename($file)."\n" . 
            "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
        } 
        } 
        $message .= "--{$mime_boundary}--"; 
        $returnpath = "-f" . $from; 

        // Send email 
        $mail = @mail($to, $subject, $message, $headers, $returnpath);  

        // Email sending status 
        if($mail){
        echo "<h1>Email Sent Successfully!</h1>";
        unlink($file);
        header('location: ../report.php');

        }else{
        echo "<h1>Email sending failed.</h1>";
        }
        if(isset($_POST['permission'])){

            $to = $email;
            $subject = "Reset your password on https://advicebot.co.za";
            $msg = "
            <html>
            <head>
            <title>HTML email</title>
            </head>
            <body>
            <p>Email Address: " . $emailAddress . "</p>
            <p>First Name: " . $_POST['firstName'] . "</p>
            <p>Last Name: " . $_POST['lastName'] . "</p>
            <p>ID Number: " . $_POST['idNumber'] . "</p>
            <p>Email Address: " . $emailAddress . "</p>
            <p>First Name: " . $_POST['firstName'] . "</p>
            </body>
            </html>
            ";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
            $headers .= "From: <martin@advicebot.co.za>" . "\r\n"; 
            mail($to, $subject, $msg, $headers);
            header('location: pending.php?email=' . $email);
        }
    }

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