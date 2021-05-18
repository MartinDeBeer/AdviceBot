<?php
    session_start();
    include('connectDB.php');
    function mailToCustomer($emailAddress){
      $subject = 'Thank you for using AdviceBot';
      $customerMsg = "
      <html>
      <head>
      <title>HTML email</title>
      </head>
      <body>
      <p>Thank you for using AdviceBot. Someone will be in contact with you soon to answer your query.</p>
      </body>
      </html>
      ";
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
      $headers .= "From: No Reply<no-reply@advicebot.co.za>" . "\r\n";
      mail($emailAddress, $subject, $customerMsg, $headers);

  }

  echo $_FILES['schedule']['name'];
    echo getcwd();
    $userId = $_SESSION['autoID'];
    $select = "SELECT * FROM users WHERE autoID = '$userId'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);
    $newFile = $row['firstName'] . "schedule.pdf";

    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["schedule"]["name"]);
    $filename = $_FILES["schedule"]["name"];
    $_FILES["schedule"]["name"] = $newFile;
    echo $filename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "pdf" ) {
      echo "Sorry, only pdf files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["schedule"]["tmp_name"], "../upload/" . $newFile)) {
        $filename = htmlspecialchars( basename( $_FILES["schedule"]["name"]));

        echo "The file ". $filename . " has been uploaded.";
        // header('location: autoMail.php');
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
    $email = $row['emailAddress'];
    // ini_set("SMTP", "smtp.afrihost.co.za");
    // ini_set("smtp_port", 25);
    // ini_set("sendmail_from", "no-reply@advicebot.co.za");
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);



    // Recipient
    $to = 'root@localhost';

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
    mailToCustomer($email);

    // Email sending status
    if($mail){
    echo "<h1>Email Sent Successfully!</h1>";
    unlink($file);
    }else{
    echo "<h1>Email sending failed.</h1>";
    }
  

?>
