<?php

    // Initialize variables
    session_start();
    $errors = [];

    // connect to database
    include('../dataPages/connectDB.php');




    // Create User
    if (isset($_POST['createUser'])){
        $userID = mysqli_real_escape_string($conn, $_POST['idNumber']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $emailAddress = mysqli_real_escape_string($conn, $_POST['emailAddress']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $cell = mysqli_real_escape_string($conn, $_POST['cell']);

        // Get session ID
        $s = "select * from users where userID = '$userID'";


        // Validate user
        if(empty($emailAddress)) array_push($errors, "Email address is required");
        if(empty($age)) array_push($errors, "Age is required");
        if(empty($gender)) array_push($errors, "Gender is required");
        if(empty($firstName)) array_push($errors, "First name is required");
        if(empty($lastName)) array_push($errors, "Last name is required");
        if(empty($userID)) array_push($errors, "ID number is required");
        if(empty($pass)) array_push($errors, "Password is required");
        $_SESSION['firstName'] = $firstName;

        // Check if user exists
        $sql = "SELECT * FROM users WHERE emailAddress = '$emailAddress' AND userID = '$userID'" ;
        $results = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($results);
        if($user){
            if($user['emailAddress'] === $emailAddress){
              array_push($errors, "User already exists");
            }
            else if($user['userID'] === $userID){
              array_push($errors, "User already exists");
            }
        }

        // Create User
        if(count($errors) == 0){
          $pass = md5($pass);
          $createUser = "INSERT INTO users VALUES (Null, '$userID', $age, '$gender', '$firstName', '$lastName','$emailAddress', '$pass', $cell)";
          $results = mysqli_query($conn, $createUser);
          $result = mysqli_query($conn, $s);
          $row = mysqli_fetch_array($result);
          $_SESSION['firstName'] = $row['firstName'];
          $_SESSION['autoID'] = $row['autoID'];
          $_SESSION['userID'] = $row['userID'];
          $_SESSION['age'] = $row['age'];
          $_SESSION['gender'] = $row['gender'];
          header('location: ../index.php');
        }

    }

    // -------------------------------------------------------------

    // LOG USER IN
    if (isset($_POST['login_user'])) {
      // Get username and password from login form
      $emailAddress = mysqli_real_escape_string($conn, $_POST['emailAddress']);
      $pass = mysqli_real_escape_string($conn, $_POST['password']);
      // validate form
      if (empty($emailAddress)) array_push($errors, "Email address is required");
      if (empty($pass)) array_push($errors, "Password is required");

      // if no error in form, log user in
      if (count($errors) == 0) {
        $pass = md5($pass);
        $sql = "SELECT * FROM users WHERE emailAddress = '$emailAddress' AND password = '$pass'";
        $results = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($results);

        if (mysqli_num_rows($results) == 1) {
          $_SESSION['emailAddress'] = $emailAddress;
          $_SESSION['autoID'] = $row['autoID'];
          $_SESSION['userID'] = $row['userID'];
          $_SESSION['firstName'] = $row['firstName'];
          $_SESSION['lastName'] = $row['lastName'];
          $_SESSION['age'] = $row['age'];
          $_SESSION['gender'] = $row['gender'];
          $_SESSION['cell'] = $row['cell'];
          $_SESSION['success'] = "You are now logged in";
          header('location: ../index.php');
        }else {
          array_push($errors, "Wrong credentials");
        }
      }
    }

    // --------------------------------------------------------------

    /*
      Accept email of user whose password is to be reset
      Send email to user to reset their password
    */
    if (isset($_POST['reset-password'])) {
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $_SESSION['emailAddress'] = $email;
      // ensure that the user exists on our system
      $query = "SELECT emailAddress FROM users WHERE emailAddress='$email'";
      $results = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($results);

      if (empty($email)) {
        array_push($errors, "Your email is required");
      }else if(mysqli_num_rows($results) <= 0) {
        array_push($errors, "Sorry, no user exists on our system with that email");
      }
      // generate a unique random token of length 100
      $token = bin2hex(random_bytes(50));

      if (count($errors) == 0) {
        ini_set("SMTP", "smtp.afrihost.co.za");
        ini_set("smtp_port", 25);
        ini_set("sendmail_from", "no-reply@advicebot.co.za");
        // store token in the password-reset database table against the user's email
        $sql = "INSERT INTO passwordreset(email, token) VALUES ('$email', '$token')";
        $results = mysqli_query($conn, $sql);

        /* Send email to user with the token in a link they can click on */
        $to = $email;
        $link = '<a href = "https://www.advicebot.co.za/UserControl/newPass.php?token=' . $token . '">link</a>';
        $subject = "Reset your password on https://advicebot.co.za";
        $msg = "
        <html>
        <head>
        <title>Password Reset</title>
        </head>
        <body>
        <h2>Password Reset</h2>
        <p>Please click on the " . $link . " to reset your password
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: No Reply<no-reply@advicebot.co.za>" . "\r\n";
        mail($to, $subject, $msg, $headers);
        header('location: pending.php?email=' . $email);
      }
    }

    // ENTER A NEW PASSWORD
    if (isset($_POST['new_password'])) {
      $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
      $new_pass_c = mysqli_real_escape_string($conn, $_POST['new_pass_c']);

      // Grab to token that came from the email link
      $token = $_SESSION['token'];
      if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
      if ($new_pass !== $new_pass_c) array_push($errors, "Passwords do not match");
      if ($new_pass == $row['password']) array_push($errors, "Password cannot be the same as an old one");
      if (count($errors) == 0) {
        // select email address of user from the password_reset table
        $sql = "SELECT email FROM passwordreset WHERE token='$token' LIMIT 1";
        $results = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($results);
        $email = $row['email'];



        if ($email) {
          $new_pass = md5($new_pass);
          $sql = "UPDATE users SET password='$new_pass' WHERE emailAddress='$email'";
          $results = mysqli_query($conn, $sql);
          header('location: ../index.php');
        }
        else if(!$email){
          echo "Email is null.";
        }
      }
    }

?>
