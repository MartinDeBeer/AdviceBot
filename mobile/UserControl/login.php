<?php include('appLogic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Stylesheets/register.css">
    <link rel="stylesheet" href="../Stylesheets/styles.css">
    <title>Login</title>
</head>
<body>

    <div class="userControl">
        <div id="login">
            <h1 class="form-title">Login</h1>
            <form class="inputForm" action="login.php" method="post">
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
                        <td></td>
                        <td><button type="submit" name="login_user" class="login-btn">Login</button></td>
                    </tr>
                    <tr>
                        <td>Not a <a href="register.php">member</a>?</td>
                        <td><a href="enterEmail.php">Forgot your password?</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>