<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylesheets/report.css">
    <title>Life Cover</title>
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

    <h1 style="text-align: center;">Life Cover</h1>
    <p>Life cover provides financial support to your family or beneficiaries in the form of a lump sum after your death. It is also a big contributor to generational wealth.</p>
    <h3><u>IFAA TIP:</u></h3>
    <p>A life policy can have different premium patterns. You can decide to pay the same premium over the premium paying term or to pay less in the beginning and gradually more at a fixed percentage or according to your age. It is extremely important to choose the right premium pattern to ensure the future sustainability of your policy.</p>

    <h2>Examples of people who may need life cover:</h2>
    <ul>
        <li>Single parents or where only family member earns an income</li>
        <li>Parents with minor or special-needs children</li>
        <li>A husband and wife who own property together</li>
        <li>Elderly parents who want to leave money to adult children to compensate them for the cost of their care</li>
        <li>Young adults whose parents incurred private student loan debt or co-signed a loan for them as surety</li>
        <li>Young and healthy adults who want to lock in low life cover rates</li>
        <li>Wealthy families who expect to owe estate taxes</li>
        <li>Families who cannot afford burial and funeral expenses</li>
        <li>Businesses with key employees (Keyman insurance)</li>
    </ul>

    <p>The amount of life cover needed will depend on your specific circumstances. You mentioned that your marriage status is <?php if($marriageStatus == "yes"){echo "married";}else{echo "single";} ?> and that you <?php if($kidsStatus == "yes"){echo "have dependents";}else{echo "don't have dependents";} ?>. You earn an income of R<?php echo $salary; ?> and have liabilities of R<?php echo $liabilities; ?>. As a rule of thumb, the minimum amount of life cover you will need is 6 (six) times income plus liabilities.</p>


    <button onclick="haveCover()">I have life cover in place</button>    
    <input id="life" type="button" value="I need life cover" onclick="tellMore('life')"><br>

    <div id="amounts" style="visibility: hidden;">
        
        <label for="lifeCoverAmount">Amount of life cover</label>
        <input type="text" id="lifeCoverAmount"><br>        
        <button onclick="window.location.href='Reports/permission.php'">I don't know how much life cover I have</button><br>

        <button onclick="showSupposed('life')">See how much you're supposed to be covered for</button>
        <div id="supposed" style="visibility: hidden;">
            <label for="supposedAmount">You should have</label>
            <input id="supposedAmount" type="text" value="<?php echo $lifeCoverAmount; ?>"><br>
            <p id="diff">The difference between the cover you have and what you should have is</p>
        </div>
    </div>


    
</body>
</html>