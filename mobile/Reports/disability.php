<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../Scripts/disability.js"></script>
    <link rel="stylesheet" href="Stylesheets/report.css">
    
    <title>Disability</title>
    <?php
        session_start();
        include("../dataPages/connectDB.php");
        $userID = $_SESSION['autoID'];
        $getMarriage = "select marriage, children, salaryAmount, liabilities from answers where userID = '$userID'";
        $result = mysqli_query($conn, $getMarriage);
        if($result){
            $row = mysqli_fetch_array($result);
        }else {
            echo "Error: " . mysqli_error($conn);
        }
        $marriageStatus = $row['marriage'];
        $kidsStatus = $row['children'];
        $salary = $row['salaryAmount'];
        $liabilities = $row['liabilities'];
        $lifeCoverAmount = ((int)$salary * 6) + ((int)$liabilities);
    ?>
</head>
<body>
    <h1 style="text-align: center;">Disability / Trauma cover</h1>
    <p>Disability insurance is intended to replace some of a working person's income when a disability prevents them from working. Trauma pays a lump sum amount if you suffer a critical illness or serious injury. This can include cancer, a heart condition, major head injury, stroke etc.</p>

    <p>In other words, Trauma covers an event, but Disability covers the disability as a result of that event.</p>

    <h3><u>Ifaa tip:</u></h3>
    <p>Trauma or Disability cover can be added as a rider benefit to your life cover instead of an alone standing benefit for a lower overall premium.</p>

    <p>The amount of cover needed will depend on your specific circumstances. You mentioned that your marriage status is <?php if($marriageStatus == "yes"){echo "married";}else{echo "single";} ?> and that you <?php if($kidsStatus == "yes"){echo "have dependents";}else{echo "don't have dependents";} ?>. You earn an income of R<?php echo $salary; ?> and have liabilities of R<?php echo $liabilities; ?>. As a rule of thumb, the minimum amount of Disability cover you will need is 6 (six) times income plus liabilities.</p>

    <!-- I have disability cover -->
    <input type="button" value="I have Disability and Trauma cover" id="haveTrauma" onclick="yesOrNo('haveTrauma')">

    <!-- I don't have disability cover -->

    <input id="needTrauma" type="button" value="I need Disability and Trauma cover" onclick="yesOrNo('needTrauma')"><br>

    <div id="amounts" class="extra" style="visibility: hidden;">
        <input type="button" value="I don't know how much cover I have" onclick="window.open('Reports/permission.php', '_blank')">
        Amount of Disability Cover
        <input type="text" id="disabilityAmount">
        <input type="button" onclick="showSupposed('disability')" value="See your ideal amount of cover" >
    </div>
    
    <div id="supposed" style="visibility: hidden;">
        
        <label for="supposedAmount">You should have</label>
        <input id="supposedAmount" name="disabilityNeeded" type="text" value="<?php echo $lifeCoverAmount; ?>"><br>
        <p id="diff"></p>
    </div>

</body>
</html>