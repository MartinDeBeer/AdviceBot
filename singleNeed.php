<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylesheets/styles.css">
    <link rel="stylesheet" href="Stylesheets/singleNeed.css">
    <script src="Scripts/single.js" type="text/javascript"></script>
    <title>AdviceBot: Single Need</title>
</head>
<body>
    <?php
        $buttonClicked;
        if(isset($_POST['lifeCover'])){
            echo '
                <h1 style="text-align: center;">Life Cover</h1>
                <p>Life cover provides financial support to your family or beneficiaries in the form of a lump sum after your death. It is also a big contributor to generational wealth.</p>
                <h4><u>IFAA TIP:</u></h4>
                <p>A life policy can have different premium patterns. You can decide to pay the same premium over the premium paying term or to pay less in the beginning and gradually more at a fixed percentage or according to your age. It is extremely important to choose the right premium pattern to ensure the future sustainability of your policy.</p>
            
                <h3>Examples of people who may need life cover:</h3>
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
            ';
            $buttonClicked = $_POST['lifeCover'];
            $buttonClickedSubject = $_POST['lifeCover'];
        }
        elseif(isset($_POST['disability'])){
            $buttonClicked = $_POST['disability'];
            $buttonClickedSubject = $_POST['disability'];
        }
        elseif(isset($_POST['savings'])){
            echo '
                <h1 style="text-align: center;">Savings And Emergency Fund</h1>
                <p>Savings should be considered a nest egg and a part of an ongoing long-term savings plan with separate shorter goals like college tuition, a new car, holiday etc. <br>
                An emergency fund is a separate savings or bank account used to cover or offset the expense of an unforeseen situation, This fund serves as a safety net, only to be tapped into when a financial crises occurs. <br>
                For me to help you reach your goals I must first do a risk profiling. I have to consider the risk required for the specific return you need, your risk capacity (the risk you can afford to take) and your risk tolerance (how you feel about risk)</p>
                <h3><u>IFAA TIP:</u></h3>
                <p>The savings vehicle is secondary to the savings coal. First determine your goal and the amount you need to save before you start exploring savings or investment products.</p>
            ';
            include('dataPages/savingsAndRetirement.php');
            echo '
                <input type="button" value="Show the first question" onclick="showQuestion()">

                <div id="questions"></div>
                <div>
                    <p id="score" name="score"></p>
                </div>
            ';
        }
        elseif(isset($_POST['retirement'])){
            echo '
            <h1 style="text-align: center;">Retirement Plan</h1>
            <p><b>Planning</b> for <b>retirement</b> starts with thinking about your goals and how long you have to save before you retire. It is also important to determine the time your money will last after retirement.</p>
            <h3><u>IFAA TIP:</u></h3>
            <p><b>"Action speaks louder than words"</b>. The most important part of any retirement plan is to put it in action. You can have great goals and a wonderful plan, but without putting that plan to work you would not accomplish much.</p>
            <h3>Tax Incentive:</h3>
            <p>The government has provided incentives for investors who invest in retirement annuities, pension funds and provident funds by providing generous annual tax deductions for these contributions. The annual tax deduction is limited to 27.5% of the greater remuneration or taxable income, capped at R350 000 per tax year.</p>
            <h3>Regulation 28:</h3>
            <p>This regulation is issued under the Pension Fund Act. It limits the extent to which retirement funds may invest in certain assets or in certain asset classes. The main purpose is to protect the member\'s retirement provision from the effects of poorly diversified investment portfolios. This is done by limiting the maximum exposure to more risky asset classes, making sure that no unnecessary risks are taken with retirement money.</p>
            <p>I will help you choose the best Regulation 28 compliant portfolio blend for your specific goals and risk tolerance.</p>
            <p>We can also "rebalance" your portfolio regularly so you can receive the maximum benefit from your portfolio choice.</p>
            <p>Do you contribute to a retirement plan at the moment?</p>
            ';
            include('dataPages/savingsAndRetirement.php');
            echo '
                <input type="button" value="Show the first question" onclick="showQuestion()">

                <div id="questions"></div>
                <div>
                    <p id="score" name="score"></p>
                </div>
            ';


        }
        elseif(isset($_POST['shortTerm'])){
            include('../Reports/shortTerm.php');

        }
        elseif(isset($_POST['will'])){
            include('../Reports/will.php');

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

 
</body>
</html>
