<?php
    session_start();
    include('dataPages/connectDB.php');

  if(isset($_POST['submitSchedule'])){
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
      if (move_uploaded_file($_FILES["schedule"]["tmp_name"], "upload/" . $newFile)) {
        $filename = htmlspecialchars( basename( $_FILES["schedule"]["name"]));

        echo "The file ". $filename . " has been uploaded.";
        $_SESSION['fileUpload'] = true;
        header('location: dataPages/autoMail.php');
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
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
