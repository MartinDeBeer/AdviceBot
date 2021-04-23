<?php include('appLogic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon" /> 
	<link rel="stylesheet" href="../Stylesheets/styles.css">
</head>
<body>
	<form class="inputForm" action="login.php" method="post">
		<h2 class="form-title">Login</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<table>
			<tr>
				<td>Email</td>
				<td><input type="text" name="emailAddress"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><button type="submit" name="login_user" class="login-btn">Login</button></td>
				<td><a href="enterEmail.php">Forgot your password?</a></td>
			</tr>
		</table>
	</form>
</body>
</html>