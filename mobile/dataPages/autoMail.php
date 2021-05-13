<?php
    // Start the session and connect to db
    session_start();
    include('connectDB.php');

    // Single Need Email - Only goes to us
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
            $headers .= "From: No Reply<no-reply@advicebot.co.za>" . "\r\n";
            mail($to, $subject, $msg, $headers);
            echo "Mail sent successfully to Advicebot admins.";

            $to = $email;
            $subject = $_POST['subject'];
            $msg = "
            <html>
            <head>
            <title>HTML email</title>
            </head>
            <body>
            <p>Thank you for using our service. We will get back to you.</p>
            <p>Have you tried our free auto advice?</p>
            </body>
            </html>
            ";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
            $headers .= "From: No Reply<no-reply@advicebot.co.za>" . "\r\n";
            mail($to, $subject, $msg, $headers);
            echo "Mail sent successfully to Advicebot admins.";
            header('location: ../index.php');
        }
        else {
            foreach($errors as $error){
                echo '<h2>' . $error . '</h2>';
                break;
            }
        }
    }

    if(isset($_SESSION['fileUpload'])){
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
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);



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
    }

    if(isset($_POST['coverChosen'])){
        $firstName = $_SESSION['firstName'];
        $surname = $_SESSION['lastName'];
        $idNum = $_SESSION['userID'];
        $email = $_SESSION['emailAddress'];
        $cell = $_SESSION['cell'];
        if(isset($_POST['checkAll'])){
            ini_set("SMTP", "smtp.afrihost.co.za");
            ini_set("smtp_port", 25);
            ini_set("sendmail_from", "no-reply@advicebot.co.za");            
            $to = 'admin@advicebot.co.za';
            $subject = "I am interested in all of the options offered.";
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
            </body>
            </html>
            ";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
            $headers .= "From: No Reply<no-reply@advicebot.co.za>" . "\r\n";
            $mail = @mail($to, $subject, $msg, $headers);
            if($mail){
                echo "Mail sent successfully to Advicebot admins. You will be redirected in 5 seconds.";
                header('location: ../index.php');
            }else{
                echo "Mail not sent.";
            }
        }
        else{
            $tmp = '';
            foreach($_POST as $post => $value){    
                if($post == 'coverChosen'){
                    break;
                }
                // echo $post . ' ';
                $subject = [];
                array_push($subject, $post);
                for($i = 0; $i < count($subject); $i++){
                    if($subject[$i] == 'retirementCheck'){
                        $subject[$i] = 'retirement Plan';
                    }
                    
                    $tmp .= $subject[$i] . ', ';
                }
                
            }
            $sub = '';
            $tmp = str_replace('Check', ' Cover', $tmp);
            $count = strlen($tmp) - 2;
            for($j = 0; $j < $count; $j++){
                $sub .= $tmp[$j];
                
            }
            
            $sub = ucwords($sub);
            echo $sub;
            ini_set("SMTP", "smtp.afrihost.co.za");
            ini_set("smtp_port", 25);
            ini_set("sendmail_from", "no-reply@advicebot.co.za"); 
            $to = 'admin@advicebot.co.za';
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
            </body>
            </html>
            ";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
            $headers .= "From: No Reply<no-reply@advicebot.co.za>" . "\r\n";
            $mail = @mail($to, $sub, $msg, $headers);
            if($mail){
                echo "Mail sent successfully to Advicebot admins. You will be redirected in 5 seconds.";
                header('location: ../index.php');
            }else{
                echo "Mail not sent.";
            }

        }
    }
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
<p>Thank you for using our service. A representative will be in contact with you soon to get more information</p>            
</body>
</html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
$headers .= "From: No Reply<no-reply@advicebot.co.za>" . "\r\n";
mail($to, $subject, $msg, $headers);
echo "Mail sent successfully to Advicebot admins.";
header('location: ../index.php');



?>
