<?php include('appLogic.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="../Stylesheets/styles.css">
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon" /> 
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<form class="inputForm" action="newPass.php" method="post">
		<h2 class="form-title">New password</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class="form-group">
			<label>New password</label>
			<input type="password" name="new_pass">
		</div>
		<div class="form-group">
			<label>Confirm new password</label>
			<input type="password" name="new_pass_c">
		</div>
		<div class="form-group">
			<button type="submit" name="new_password" class="login-btn">Submit</button>
		</div>
	</form>
</body>
<?php
    if(isset($_GET['token']))    {
        $token = $_GET['token'];
        $_SESSION['token'] = $token;
        $session_token = $_SESSION['token'];
        }else{
        echo "no token";
        }
?>
</html>