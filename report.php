<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Stylesheets/styles.css" type="text/css" rel="stylesheet" />
    <link href="Stylesheets/report.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon" />
    <script src="Scripts/reports.js"></script>
    <title>Report</title>
    <script>
        function spec(page){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("specReport").innerHTML = this.responseText;
                }
            };

            xmlhttp.open("GET", "Reports/" + page + ".php", true);
            xmlhttp.send();
        }
    </script>

</head>
<body>
    <form action="dataPages/autoMail.php" method="post">
        <div id="priorityIndicator">
            <h1 style="text-align: center;">Priority Indicator</h1>
            <?php
                session_start();

                include('dataPages/connectDB.php');

                $autoID = $_SESSION['autoID'];
                $select = "select * from report where userID = '$autoID' and reportID=(select max(reportID) from report)";
                $getAnswer = "select will from answers where userID = '$autoID' and answerID = (select max(answerID) from answers)";
                $willAnswer = mysqli_query($conn, $getAnswer);

                $result = mysqli_query($conn, $select);

                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    echo '<h3>The Priority Indicator shows which financial aspect is most important at your stage of life</h3>';
                    echo '<table>';
                    echo '
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Covered or Not</th>
                    <th>Existing Cover</th>
                    <th>Ideal Amount</th>
                    <th>Difference</th>';
                    // Death
                    echo '<tr>
                            <td>Death: </td>
                            <td><progress id="death" value="' . $row['deathCover'] .'" max="65"></progress></td>
                            <td><a href="#" onclick="spec(\'lifeCover\')">Click <u>here</u> for full report</a></td>
                            <td class="reportAnswer" id="lifeYesNo"></td>
                            <td class="reportAnswer" id="lifeAmount"></td>
                            <td class="reportAnswer" id="lifeAmountNeeded"></td>
                            <td class="reportAnswer" id="lifeAmountDiff"></td>
                        </tr>';

                    // Disability
                    echo '<tr>
                            <td>Disability: </td>
                            <td><progress id="disability" value="' . $row['disability'] .'" max="65"></progress></td>
                            <td><a href="#" onclick="spec(\'disability\')">Click <u>here</u> for full report</a></td>
                            <td class="reportAnswer" id="disabilityYesNo"></td>
                            <td class="reportAnswer" id="traumaAmount"></td>
                            <td class="reportAnswer" id="traumaAmountNeeded"></td>
                            <td class="reportAnswer" id="traumaAmountDiff"></td>
                        </tr>';

                    // Savings
                    echo '<tr>
                            <td>Savings: </td>
                            <td><progress id="savings" value="' . $row['savings'] .'" max="65"></progress></td>
                            <td><a href="#" onclick="spec(\'savings\')">Click <u>here</u> for full report</a></td>
                            <td class="reportAnswer" id="savingsYesNo"></td>
                            <td class="reportAnswer" id="riskProfile"></td>
                        </tr>';

                    // Retirement
                    echo '<tr>
                            <td>Retirement: </td>
                            <td><progress id="retirement" value="' . $row['retirement'] .'" max="65"></progress></td>
                            <td><a href="#" onclick="spec(\'retirement\')">Click <u>here</u> for full report</a></td>
                            <td class="reportAnswer" id="retirementYesNo"></td>
                    </tr>';

                    // Will
                    if($row['will'] != 0){
                        echo '<tr>
                                <td>Will:</td>
                                <td> Yes </td>
                                <td><a href="#" onclick="spec(\'will\')">Click <u>here</u> for full report</a></td>
                                <td class="reportAnswer" id="willYesNo" >I don\'t have a will</td>
                        </tr>';
                    }
                    else{
                        echo '<tr>
                                <td>Will:</td>
                                <td> No </td>
                                <td><a href="#" onclick="spec(\'will\')">Click <u>here</u> for full report</a></td>
                                <td class="reportAnswer" id="willYesNo">I have a will</td>
                        </tr>';
                    }

                    // Short term
                    if($row['shortTerm'] != 0){
                        echo '<tr>
                                <td>Short Term: </td>
                                <td> Yes </td>
                                <td><a href="#" onclick="spec(\'shortTerm\')">Click <u>here</u> for full report</a></td>
                                <td class="reportAnswer" id="shortTermYesNo"></td>
                        </tr>';
                        echo '</table>';
                    }
                    else{
                        echo '<tr>
                            <td>Short Term: </td>
                            <td> No </td>
                            <td><a href="#" onclick="spec(\'shortTerm\')">Click <u>here</u> for full report</a></td>
                            <td class="reportAnswer" id="shortTermYesNo"></td>
                            <td class="reportAnswer" style="visibility: hidden" id="scheduleUpload"><a href="Reports/scheduleUpload.php" target="_blank">Click here to upload your schedule</a></td>
                            <td></td>
                        </tr>';
                        echo '</table>';
                    }
                }
                else{
                    echo "Error: " . mysqli_error($conn);
                }
            ?>
        </div>        
        <h4>Please tick the boxes of the type of insurance you have queries about and click submit.<br> An email will be sent to us so we can get in touch with you</h4>
        <button type="submit" name="coverChosen">Submit</button>
        <div id="specReport"></div>
    </form>
</body>
</html>
