<?php 
    session_start();
    include('../connectDB.php');

    // Schedule upload
    $userId = $_SESSION['autoID'];
    $select = "SELECT * FROM users WHERE autoID = '$userId'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);
    $newFile = $row['firstName'] . "schedule.pdf";
    $emailAddress = $row['emailAddress'];
    ini_set("SMTP", "smtp.afrihost.co.za");
    ini_set("smtp_port", 25);
    ini_set("sendmail_from", "no-reply@advicebot.co.za");



    // Recipient 
    $to = 'admin@advicebot.co.za'; 

    // Sender 
    $from = 'no-reply@advicebot.co.za'; 
    $fromName = 'No-Reply'; 

    // Email subject 
    $subject = 'Schedule of ' . $row['emailAddress'];  

    // Attachment file 
    $file = "../upload/" . $newFile; 


    // Email body content 
    $htmlContent = ' 
    <h3>Short term schedule for ' . $row['firstName'] . ' ' . $row['lastName'] . '</h3> 
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
    if(!empty($file)){ 
        if(is_file($file)){ 
            $message .= "--{$mime_boundary}\n"; 
            $fp =    fopen($file,"rb"); 
            $data =  fread($fp,filesize($file)); 

            @fclose($fp); 
            $data = chunk_split(base64_encode($data)); 
            $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
            "Content-Description: ".basename($file)."\n" . 
            "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
        }else {
            echo "failed";
        }
    }
    else {
        echo "There is no file";
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

    // Permission
    if(isset($_POST['permission'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['emailAddress'];
        $idNumber = $_POST['idNumber'];
        if(isset($_POST['spouseFirst'])){
            $spouseFirst = $_POST['spouseFirst'];
            $spouseLast = $_POST['spouseLast'];
            $spouseId = $_POST['spouseId'];
        }

        $to = $email;
        $subject = "Consent to get information from Astute";
        $msg = "
        <html>
        <head>
        </head>
        <body>
        <p>First Name: " . $firstName . "</p>
        <p>Last Name: " . $lastName . "</p>
        <p>Email Address: " . $email . "</p>
        <p>Spouse First Name: " . $spouseFirst . "</p>
        <p>Spouse Last Name: " . $spouseLast . "</p>
        <p>Spouse ID Number: " . $spouseId . "</p>
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: <martin@advicebot.co.za>" . "\r\n" .
        "BCC: admin@advicebot.co.za"; 
        mail($to, $subject, $msg, $headers);
        header('location: ../report.php'); 
    }

?>