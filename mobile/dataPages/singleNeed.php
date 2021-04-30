<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Stylesheets/styles.css">
    <link rel="stylesheet" href="../Stylesheets/singleNeed.css">
    <script src="../Scripts/single.js" type="text/javascript"></script>
    <title>AdviceBot: Single Need</title>
    <?php include('autoMail.php'); ?>
</head>
<body>
    <?php
        $buttonClicked;
        if(isset($_POST['lifeCover'])){
            $buttonClicked = $_POST['lifeCover'];
            $buttonClickedSubject = $_POST['lifeCover'];
        }
        elseif(isset($_POST['disability'])){
            $buttonClicked = $_POST['disability'];
            $buttonClickedSubject = $_POST['disability'];
        }
        elseif(isset($_POST['savings'])){
            $buttonClicked = $_POST['savings'];
            $buttonClickedSubject = $_POST['savings'];
        }
        elseif(isset($_POST['retirement'])){
            $buttonClicked = $_POST['retirement'];
            $buttonClickedSubject = $_POST['retirement'];
        }
        elseif(isset($_POST['shortTerm'])){
            $buttonClicked = $_POST['shortTerm'];
            $buttonClickedSubject = $_POST['shortTerm'];
        }
        elseif(isset($_POST['will'])){
            $buttonClicked = 'a ' . $_POST['will'];
            $buttonClickedSubject =  $_POST['will'];
        }
        elseif(isset($_POST['other'])){
            $buttonClicked = 'a Special Need';
            $buttonClickedSubject = 'Special Need';
        }
        else {
            $buttonClicked = "";
            $buttonClickedSubject = "";
        }
    ?>
    <h1>I need help with <?php echo $buttonClicked ?></h1>
    <h3>Please fill in the form and we will get back to you with an answer on your query as soon as possible.</h3>
    <form action="singleNeed.php" method="post">
        <table>
            <tr>
                <td><label >First Name</label></td>
                <td><input type="text" id="firstName" name="firstName" onfocusout="checkInput('firstName')" ></td>
                <td><p class="error" id="nameError"></p></td>
            </tr>
            <tr>
                <td><label >Surname</label></td>
                <td><input type="text" id="surname" name="surname" onfocusout="checkInput('surname')" ></td>
                <td><p class="error" id="lNameError"></p></td>
            </tr>
            <tr>
                <td><label >Email Address</label></td>
                <td><input type="text" id="email" name="email" onfocusout="checkInput('email')" ></td>
                <td><p class="error" id="emailError"></p></td>
            </tr>
            <tr>
                <td><label >ID Number</label></td>
                <td><input type="text" maxlength="13" name="idNum" id="idNum" onfocusout="checkInput('idNum')" ></td>
                <td><p class="error" id="idError"></p></td>
            </tr>
            <tr>
                <td><label >Cell Number</label></td>
                <td><input type="text" maxlength="10" id="cell" name="cell" onfocusout="checkInput('cell')" ></td>
                <td><p class="error" id="cellError"></p></td>
            </tr>
            <tr>
                <td><label >Ask a Question</label></td>
                <td><input type="textarea" id="question" name="question" oninput="checkInput('question')" ></td>
                <td><p class="error" id="questionError"></p></td>
            </tr>
            <tr>
                <td>
                <input type="text" name="subject" value="<?php echo $buttonClickedSubject ?>">
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit" id="submit" disabled></td>
            </tr>
        </table>
    </form>
</body>
</html>
