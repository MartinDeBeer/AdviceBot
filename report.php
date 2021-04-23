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
    <div id="specReport"></div>
    <div id="priorityIndicator">
    <h1 style="text-align: center;">Priority Indicator</h1>
        <?php
            session_start();

            include('connectDB.php');

            $autoID = $_SESSION['autoID'];
            $select = "select * from report where userID = '$autoID' and reportID=(select max(reportID) from report)";

            $result = mysqli_query($conn, $select);

            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                echo "<table id='report'>";
                echo '<tr><td>Death: </td>' . '<td><progress id="death" value="' . $row['deathCover'] .'" max="65"></progress></td>' . '<td><a href="#" onclick="spec(\'lifeCover\')">Click here for full report</a>' . '</tr></td>';
                echo '<tr><td>Disability: ' . '<td><progress id="disability" value="' . $row['disability'] .'" max="65"></progress></td>' . '<td><a href="#" onclick="spec(\'disability\')">Click here for full report</a>' . '</tr></td>';
                echo '<tr><td>Savings: ' . '<td><progress id="savings" value="' . $row['savings'] .'" max="65"></progress></td>' . '<td><a href="#" onclick="spec(\'savings\')">Click here for full report</a>' . '</tr></td>';
                echo '<tr><td>Retirement: ' . '<td><progress id="retirement" value="' . $row['retirement'] .'" max="65"></progress></td>' . '<td><a href="#" onclick="spec(\'retirement\')">Click here for full report</a>' . '</tr></td>';
                if($row['will'] != 0){
                    echo '<tr><td>Will:</td>' . '<td> Yes </td>' . '<td><a href="#" onclick="spec(\'will\')">Click here for full report</a></td></tr>'; 
                }
                else{
                    echo '<tr><td>Will:</td>' . '<td> No </td>' . '<td><a href="#" onclick="spec(\'will\')">Click here for full report</a></td></tr>'; 
                }
                if($row['shortTerm'] != 0){
                    echo '<tr><td>Short Term: </td>' . '<td> Yes </td>' . '<td><a href="#" onclick="spec(\'shortTerm\')">Click here for full report</a></td></tr>';
                }
                else{
                    echo '<tr><td>Short Term: </td>' . '<td> No </td>' . '<td><a href="#" onclick="spec(\'shortTerm\')">Click here for full report</a></td></tr>';
                }
            }
            else{
                echo "Error: " . mysqli_error($conn);
            }

            
        ?>
    </div>

    
</body>
</html> 