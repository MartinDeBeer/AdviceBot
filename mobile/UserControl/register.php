<?php include('appLogic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Stylesheets/styles.css">
    <script src="../Scripts/createUser.js"></script>
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon" /> 
    <title>Register</title>
    <style>
        #age{
            pointer-events: none;
            background-color: lightgray;
            border: lightgray 1px solid;
        }
        #gender{
            pointer-events: none;
            background-color: lightgray;
            border: lightgray 1px solid;
        }
    </style>
</head>
<body>
    <h1>Register</h1>
    <form class="inputForm" action="register.php" method="post">
        <?php include('messages.php'); ?>
        <table>
            <tr>
                <td>Please input your ID number</td>
                <td><input type="text" id="idNum" name="idNumber" onchange="getAge()" onfocusout="checkInput('idNum')"> *</td>
                <td><p class="error" id="idError"></p></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" id="age" name="age" ></td>
                <td></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" id="gender" name="gender" ></td>
            </tr>
            <tr>
                <td>Please input your first name</td>
                <td><input type="text" id="firstName" name="firstName" onfocusout="checkInput('firstName')"> *</td>
                <td><p class="error" id="nameError"></p></td>
            </tr>
            <tr>
                <td>Please input your last name</td>
                <td><input type="text" id="lastName" name="lastName" onfocusout="checkInput('lastName')"> *</td>
                <td><p class="error" id="lNameError"></p></td>
            </tr>
            <tr>
                <td>Please input your email address</td>
                <td><input type="email" id="email" name="emailAddress" onfocusout="checkInput('email')"> *</td>
                <td><p class="error" id="emailError"></p></td>
            </tr>
            <tr>
                <td>Please create a password of at least 8 characters</td>
                <td><input type="password" id="pass" name="pass" onfocusout="checkInput('pass')"> *</td>
                <td><p class="error" id="passError"></p></td>
            </tr>
            <tr>
                <td>Please confirm your password</td>
                <td><input type="password" id="passConf" name="passConf" onfocusout="checkInput('passConf')"> *</td>
                <td><p class="error" id="passConfError"></p></td>
            </tr>
            <tr>
                <td><button type="submit" id="register" name="createUser" disabled>Submit</button></td>
                <td>Already a user? <a href="login.php">Login</a></td>
            </tr>
        </table>
    </form>
</body>
</html>