<?php
session_start();
include('connectDB.php');

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
    header('location: Reports/autoMail.php');
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>