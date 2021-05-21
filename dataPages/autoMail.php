<?php

    // Start the session and connect to db
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

    // Single Need
    if(isset($_POST['submitInfo'])){
        $firstName = $_POST['firstName'];
        $surname = $_POST['lastName'];
        $idNum = $_POST['idNumber'];
        $email = $_POST['emailAddress'];
        $cell = $_POST['cellNumber'];
        if(isset($_SESSION['will'])){
            $tmp = 'Will and Testament';
        }else if(isset($_SESSION['lifeCover'])){
            $tmp = 'Life Cover';
        }else if(isset($_SESSION['disability'])){
            $tmp = 'Trauma and Disability';
        }
        ini_set("SMTP", "smtp.afrihost.co.za");
        ini_set("smtp_port", 25);
        ini_set("sendmail_from", "no-reply@advicebot.co.za");
        $subject = $tmp;
        $to = 'admin@advicebot.co.za';
        $msg = "
        <html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <p>First Name: " . $firstName . "</p>
        <p>Last Name: " . $surname . "</p>
        <p>Email Address: " . $email . "</p>
        <p>ID Number: " . $idNum . "</p>
        <p>Cellphone Number: " . $cell . "</p>
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: No Reply<no-reply@advicebot.co.za>" . "\r\n";
        $mail = @mail($to, $subject, $msg, $headers);
        mailToCustomer($email);
        if($mail){
            header('location: ../index.php');
        }else{
            echo "Mail not sent.";
        }
    }
    // Permission
    if(isset($_POST['permission'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $idNumber = $_POST['idNumber'];
        $personal = $_POST['personal'];
        if($personal == 'no'){
            $rep = $_POST['rep'];
        }
        ini_set("SMTP", "smtp.afrihost.co.za");
        ini_set("smtp_port", 25);
        ini_set("sendmail_from", "no-reply@advicebot.co.za"); 
        $to = 'admin@advicebot.co.za';
        $subject = "Consent to get information from Astute";
        $msg = "
        <html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <p>First Name: " . $firstName . "</p>
        <p>Last Name: " . $lastName . "</p>
        <p>ID Number: " . $idNumber . "</p>
        <p>Personal Capacity: " . $personal . "</p>
        <p>Representing: " . $rep . "</p>
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: No Reply<no-reply@advicebot.co.za>" . "\r\n";
        mail($to, $subject, $msg, $headers);
        header('location: ../report.php'); 
    }

    // Single Need - Retirement / Savings
    if(isset($_POST['submitReport'])){
        $firstName = $_POST['firstName'];
        $surname = $_POST['lastName'];
        $email = $_POST['emailAddress'];
        $idNumber = $_POST['idNumber'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $employment = $_POST['employment'];
        $maritalStatus = $_POST['maritalStatus'];
        $lumpSum = $_POST['lumpSum'];
        $saving = $_POST['saving'];
        $future = $_POST['future'];
        $marketDrop = $_POST['marketDrop'];
        $guaranteedOrPotential = $_POST['guaranteedOrPotential'];
        $settle = $_POST['settle'];
        $score = $_POST['score'];
        ini_set("SMTP", "smtp.afrihost.co.za");
        ini_set("smtp_port", 25);
        ini_set("sendmail_from", "no-reply@advicebot.co.za");
        $to = 'admin@advicebot.co.za';
        if(isset($_SESSION['savings'])){
            $subject = "Single Need Savings Report of " . $firstName . ' ' . $surname;
        } else if(isset($_SESSION['retirement'])){
            $subject = "Single Need Retirement Report of " . $firstName . ' ' . $surname;
        }
        $msg = "
        <html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <table>
        <th>Question</th>
        <th>Answer</th>
        <tr>
        <td>What is your first name?</td>
        <td>" . $firstName . "</td>
        </tr>
        <tr>
        <td>What is your last name?</td>
        <td>" . $surname . "</td>
        </tr>
        <tr>
        <td>What is your email address?</td>
        <td>" . $email . "</td>
        </tr>
        <tr>
        <td>Please input your ID Number</td>
        <td>" . $idNumber . "</td>
        </tr>
        <tr>
        <td>Your age is:</td>
        <td>" . $age . "</td>
        </tr>
        <tr>
        <td>Your gender is:</td>
        <td>" . $gender . "</td>
        </tr>
        <tr>
        <td>Are you self-employed or a salary worker?</td>
        <td>"  . $employment . "</td>
        </tr>
        <tr>
        <td>Marital Status:</td>
        <td>"  . $maritalStatus . "</td>
        </tr>
        <tr>
        <td>Do you have a lump sum to invest?</td>
        <td>"  . $lumpSum . "</td>
        </tr>
        <tr>
        <td>Do you intend to save a monthly amount?</td>
        <td>"  . $saving . "</td>
        </tr>
        <tr>
        <td>How do you feel about your financial future?</td>
        <td>"  . $future . "</td>
        </tr>
        <tr>
        <td>The market dropped quickly and your portfolio value dropped by -20%. What would you do?</td>
        <td>"  . $marketDrop . "</td>
        </tr>
        <tr>
        <td>Would you settle for a guaranteed return of between 5% or a potential return of 0% and 15%?</td>
        <td>"  . $guaranteedOrPotential . "</td>
        </tr>
        <tr>
        <td>Would you settle for a potential return of between 5% and 10% or a potential return of between -10% and 25%?</td>
        <td>"  . $settle . "</td>
        </tr>
        <tr>
        <td>Your score: </td>
        <td>"  . $score . "</td>
        </tr>
        </table>
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: No Reply<no-reply@advicebot.co.za>" . "\r\n";
        $mail = @mail($to, $subject, $msg, $headers);
        mailToCustomer($email);
        if($mail){
            echo "Mail sent successfully to Advicebot admins. You will be redirected in 5 seconds.";
            header('location: ../index.php');
        }else{
            echo "Mail not sent.";
        }        
    }

    if(isset($_POST['fullReport'])){
        $autoID = $_SESSION['autoID'];
        $select = "select * from report where userID = '$autoID' and reportID=(select max(reportID) from report)";
        $result = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($result);

        $firstName = $_SESSION['firstName'];
        $surname = $_SESSION['lastName'];
        $email = $_SESSION['emailAddress'];
        $idNumber = $_SESSION['userID'];
        $age = $_SESSION['age'];
        $gender = $_SESSION['gender'];
        // Life Cover
        $death = $row['deathCover'];
        if(isset($_POST['lifeYesNo'])) $deathYesNo = $_POST['lifeYesNo'];
        if(isset($_POST['lifeAmount'])) $lifeAmount = $_POST['lifeAmount'];
        if(isset($_POST['lifeAmountNeeded'])) $lifeAmountNeeded = $_POST['lifeAmountNeeded'];
        if(isset($_POST['lifeAmountDiff'])) $lifeAmountDiff = $_POST['lifeAmountDiff'];
        // Disability And Trauma
        $disability = $row['disability'];
        if(isset($_POST['disabilityYesNo'])) $disabilityYesNo = $_POST['disabilityYesNo'];
        if(isset($_POST['traumaAmount'])) $traumaAmount = $_POST['traumaAmount'];
        if(isset($_POST['traumaAmountNeeded'])) $traumaAmountNeeded = $_POST['traumaAmountNeeded'];
        if(isset($_POST['traumaAmountDiff'])) $traumaAmountDiff = $_POST['traumaAmountDiff'];
        // Savings
        $savings = $row['savings'];
        if(isset($_POST['savingsYesNo'])) $savingsYesNo = $_POST['savingsYesNo'];
        if(isset($_POST['riskProfile'])) $riskProfile = $_POST['riskProfile'];
        // Retirement
        $retirement = $row['retirement'];
        if(isset($_POST['retirementYesNo'])) $retirementYesNo = $_POST['retirementYesNo'];
        // Will
        $will = $row['will'];
        if(isset($_POST['willYesNo'])) $willYesNo = $_POST['willYesNo'];
        // Short Term
        $shortTerm = $row['shortTerm'];
        if(isset($_POST['shortTermYesNo'])) $shortTermYesNo = $_POST['shortTermYesNo'];
        if(isset($_POST['schedule'])) $schedule = $_POST['schedule'];



        // ini_set("SMTP", "smtp.afrihost.co.za");
        // ini_set("smtp_port", 25);
        // ini_set("sendmail_from", "no-reply@advicebot.co.za");
        $to = 'admin@advicebot.co.za';
        $subject = "Report of " . $firstName . ' ' . $surname;
        $msg = '
        <html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <table>
        <tr>
        <td>First Name: </td>
        <td>' . $firstName . '</td>
        </tr>
        <tr>
        <td>Last Name: </td>
        <td> ' . $surname . '</td>
        </tr>
        <tr>
        <td>Email Address: </td>
        <td>' . $email . '</td>
        </tr>
        <tr>
        <td>ID number: </td>
        <td>' . $idNumber . '</td>
        </tr>
        <tr>
        <td>Age:</td>
        <td>' . $age . '</td>
        </tr>
        <tr>
        <td>Gender: </td>
        <td>' . $gender . '</td>
        </tr>
        </table>
        <table>
        <th></th>
        <th></th>
        <th>Covered or Not</th>
        <th>Existing Cover</th>
        <th>Ideal Amount</th>
        <th>Difference</th>
        <tr>
            <td>Death: </td>
            <td><progress value="' . $death .'" max="65"></progress></td>
            <td>' . $deathYesNo . '</td>
            <td>' . $lifeAmount . '</td>
            <td>' . $lifeAmountNeeded . '</td>
            <td>' . $lifeAmountDiff . '</td>
        </tr>
        <tr>
            <td>Disability: </td>
            <td><progress value="' . $disability .'" max="65"></progress></td>
            <td>' . $disabilityYesNo . '</td>
            <td>' . $traumaAmount . '</td>
            <td>' . $traumaAmountNeeded . '</td>
            <td>' . $traumaAmountDiff . '</td>
        </tr>
        <tr>
            <td>Savings: </td>
            <td><progress value="' . $savings .'" max="65"></progress></td>
            <td>' . $savingsYesNo . '</td>
            <td>' . $riskProfile . '</td>
        </tr>
        <tr>
                <td>Retirement: </td>
                <td><progress value="' . $retirement .'" max="65"></progress></td>
                <td>' . $retirementYesNo .'</td>
        </tr>
        <tr>
            <td>Will:</td>
            <td> ' . $will .' </td>
            <td class="reportAnswer" name="willYesNo" id="willYesNo" >I don\'t have a will</td>
        </tr>
        <tr>
            <td>Short Term: </td>
            <td>' . $shortTerm . ' </td>
            <td>' . $shortTermYesNo .'</td>
            <td>' . $schedule . '</td>
        </tr>
        </table>
        </body>
        </html>
        ';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: No Reply<no-reply@advicebot.co.za>" . "\r\n";
        $mail = @mail($to, $subject, $msg, $headers);
        mailToCustomer($email);
        if($mail){
            echo "Mail sent successfully to Advicebot admins. You will be redirected in 5 seconds.";
            header('location: ../index.php');
        }else{
            echo "Mail not sent.";
        }   
    }

    
?>
