<?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';

    session_start();
    include('connectDB.php');
    if(isset($_SESSION['emailAddress'])){
      $userId = $_SESSION['autoID'];
      $select = "SELECT * FROM users WHERE autoID = '$userId'";
      $result = mysqli_query($conn, $select);
      $row = mysqli_fetch_array($result);
      $firstName = $row['firstName'];
      $lastName = $row['lastName'];
      $emailAddress = $row['emailAddress'];
    } else {
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $emailAddress = $_POST['emailAddress'];
      $idNumber = $_POST['idNumber'];
      $cellNumber = $_POST['cellNumber'];
    }
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
    $newFile = $firstName . "schedule.pdf";

    $filename = $_FILES["schedule"]["name"];
    $_FILES["schedule"]["name"] = $newFile;    
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["schedule"]["name"]);
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
    

    
    $file = "../upload/" . $newFile;

    $mail = new PHPMailer();

    try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.advicebot.co.za';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'no-reply@advicebot.co.za';                     //SMTP username
    $mail->Password   = 'ni!8-@Q@V~V6';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->Port       = 465;                                    
    $mail->SMTPSecure = 'ssl';


    //Recipients
    $mail->setFrom('no-reply@advicebot.co.za', 'No Reply');
    $mail->addAddress('admin@advicebot.co.za');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment($file);         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    if(isset($_SESSION['emailAddress'])){
      $mail->Subject = 'Short Term Schedule of ' . $firstName. ' ' . $lastName;
      $mail->Body    = 'Please see attached the Short Term Schedule of ' . $firstName . ' ' . $lastName;
    } else {
      $mail->Subject = 'Single Need - Short Term Schedule of ' . $firstName. ' ' . $lastName;
      $mail->Body = '
        <table>
          <tr>
          <td>First Name: </td>
          <td>' . $firstName . '</td>
          </tr>
          <tr>
          <td>Last Name: </td>
          <td>' . $lastName . '</td>
          </tr>
          <tr>
          <td>ID Number: </td>
          <td>' . $idNumber . '</td>
          </tr>
          <tr>
          <td>Cellphone Number: </td>
          <td>' . $cellNumber . '</td>
          </tr>
          <tr>
          <td>Email Address: </td>
          <td>' . $emailAddress . '</td>
          </tr>
        </table>
      ';
    }
    $mail->AltBody = 'Please see attached schedule';

    $mail->send();
    echo 'Message has been sent';
    unlink($file);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
