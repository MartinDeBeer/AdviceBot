<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon" /> 
    <link rel="stylesheet" href="Stylesheets/styles.css">
    <link rel="stylesheet" href="Stylesheets/singleNeed.css">
    <script src="Scripts/single.js" type="text/javascript"></script>
    <title>AdviceBot: Single Need</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5147X15NFL"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-5147X15NFL');
    </script>
</head>
<body>
    <?php
        session_start();
        $buttonClicked;
        if(isset($_POST['lifeCover'])){
            $_SESSION['lifeCover'] = true;
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
            echo '
            <input type="button" id="noLife" onclick="noCover()" value="I don\'t have life cover">
            <input type="button" id="haveLife" value="I have life cover">
            
            <form action="dataPages/autoMail.php" method="POST" class="extra" style="visibility: hidden">
            <span name="lifeSpan" style="visibility: none">Life</span>

            <h3>Please enter your info and someone will get in contact with you</h3>
                <table id="lifeCoverInfo">
                    <tr>
                        <td>Please enter your first name</td>
                        <td><input type="text" name="firstName" id="firstName"></td>
                    </tr>
                    <tr>
                        <td>Please enter your surname</td>
                        <td><input type="text" name="lastName" id="lastName"></td>
                    </tr>
                    <tr>
                        <td>Please enter your ID number</td>
                        <td><input type="text" name="idNumber" id="idNumber"></td>
                    </tr>
                    <tr>
                        <td>Please enter your cellphone number</td>
                        <td><input type="text" name="cellNumber" id="cellNumber"></td>
                    </tr>
                    <tr>
                        <td>Please enter your email address</td>
                        <td><input type="text" name="emailAddress" id="emailAddress"></td>
                    </tr>
                </table>
                <input type="submit" name="submitInfo" id="submitLifeCoverInfo">
            </form>
            ';
        }
        elseif(isset($_POST['disability'])){
            $_SESSION['disability'] = true;
            echo '<h1 style="text-align: center;">Disability / Trauma cover</h1>
            <p>Disability insurance is intended to replace some of a working person\'s income when a disability prevents them from working. Trauma pays a lump sum amount if you suffer a critical illness or serious injury. This can include cancer, a heart condition, major head injury, stroke etc.</p>
        
            <p>In other words, Trauma covers an event, but Disability covers the disability as a result of that event.</p>
        
            <h3><u>Ifaa tip:</u></h3>
            <p>Trauma or Disability cover can be added as a rider benefit to your life cover instead of an alone standing benefit for a lower overall premium.</p>';
            echo '
            <input type="button" id="haveDisability" value="I have disability and trauma cover">
            <input type="button" id="noDisability" onclick="noCover()" value="I don\'t have disability and trauma cover">
            
            <form action="dataPages/autoMail.php" method="POST" class="extra" style="visibility: hidden">
                <h3>Please enter your info and someone will get in contact with you</h3>
                <span name="disabilitySpan">Disability</span>

                <table id="disabilityInfo">
                    <tr>
                        <td>Please enter your first name</td>
                        <td><input type="text" name="firstName" id="firstName"></td>
                    </tr>
                    <tr>
                        <td>Please enter your surname</td>
                        <td><input type="text" name="lastName" id="lastName"></td>
                    </tr>
                    <tr>
                        <td>Please enter your ID number</td>
                        <td><input type="text" name="idNumber" id="idNumber"></td>
                    </tr>
                    <tr>
                        <td>Please enter your cellphone number</td>
                        <td><input type="text" name="cellNumber" id="cellNumber"></td>
                    </tr>
                    <tr>
                        <td>Please enter your email address</td>
                        <td><input type="text" name="emailAddress" id="emailAddress"></td>
                    </tr>
                </table>
                <input type="submit" name="submitInfo" id="submitDisabilityInfo">
            </form>
            ';
        }
        elseif(isset($_POST['savings'])){
            $_SESSION['savings'] = true;
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
                
                <form action="dataPages/autoMail.php" method="POST">
                    <div id="questions"></div>
                    <div id="answers" style="visibility: hidden">
                        <input id="firstNameAnswer" name="firstName" type="text">
                        <input id="surnameAnswer" name="lastName" type="text">
                        <input id="idNumberAnswer" name="idNumber" type="text">
                        <input id="emailAddressAnswer" name="emailAddress" type="text">
                        <input id="ageAnswer" name="age" type="text">
                        <input id="genderAnswer" name="gender" type="text">
                        <input id="employmentAnswer" name="employment" type="text">
                        <input id="maritalStatusAnswer" name="maritalStatus" type="text">
                        <input id="lumpSumAnswer" name="lumpSum" type="text">
                        <input id="savingAnswer" name="saving" type="text">
                        <input id="futureAnswer" name="future" type="text">
                        <input id="marketDropAnswer" name="marketDrop" type="text">
                        <input id="guaranteedOrPotentialAnswer" name="guaranteedOrPotential" type="text">
                        <input id="settleAnswer" name="settle" type="text">
                        <input id="scoreAnswer" name="score" type="text">

                    </div>
                    <input type="button"id="next" value="Click here to start automated advice" onclick="showQuestion()">
                    <input type="submit" name="submitReport" value="Submit" id="submit" style="visibility: hidden">
                    <p id="score"></p>
                </form>
            ';
        }
        elseif(isset($_POST['retirement'])){
            $_SESSION['retirement'] = true;
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

                <form action="dataPages/autoMail.php" method="POST">
                    <div id="questions"></div>
                    <div id="answers" >
                        <input id="firstNameAnswer" name="firstName" type="text">
                        <input id="surnameAnswer" name="lastName" type="text">
                        <input id="idNumberAnswer" name="idNumber" type="text">
                        <input id="emailAddressAnswer" name="emailAddress" type="text">
                        <input id="ageAnswer" name="age" type="text">
                        <input id="genderAnswer" name="gender" type="text">
                        <input id="employmentAnswer" name="employment" type="text">
                        <input id="maritalStatusAnswer" name="maritalStatus" type="text">
                        <input id="lumpSumAnswer" name="lumpSum" type="text">
                        <input id="savingAnswer" name="saving" type="text">
                        <input id="futureAnswer" name="future" type="text">
                        <input id="marketDropAnswer" name="marketDrop" type="text">
                        <input id="guaranteedOrPotentialAnswer" name="guaranteedOrPotential" type="text">
                        <input id="settleAnswer" name="settle" type="text">
                        <input id="scoreAnswer" name="score" type="text">

                    </div>
                    <input type="button"id="next" value="Click here to start automated advice" onclick="showQuestion()">
                    <input type="submit" name="submitReport" value="Submit" id="submit" style="visibility: hidden">
                    <p id="score"></p>
                </form>
            ';


        }
        elseif(isset($_POST['shortTerm'])){
            echo '
            <h1 style="text-align: center;">Short term Insurance</h1>

            <p>You mentioned that you own certain assets.
            Home or Car insurance is an essential part of any financial plan. It’s the business of your insurance company to put you back in the same financial position you were before an accident or specific event that caused you damage or lost. The insurance company will also cover your liability towards others. <br>
            Home insurance can be divided into building or content insurance. Your car insurance can be specified to be comprehensive, only third part theft and fire or only third party. It you financed your vehicle through a bank or finance company, comprehensive cover will usually be compulsory. </p>
            <h3><u>IFAA TIP:</u></h3>
            <p>I’m independent. I represent you as client. I do not represent any insurance company. This is especially important at claim stage. </p>
            <p>Every insurance company has its own unique products and value-added service. <br>
            Luckily we can offer you a wide variety of products from different insurance providers. <br>
            </p>
            We can compare your current insurance schedule to other offers in the market and see if your premium is still market related or if you can perhaps save on your monthly expenses. <br>
            
            <input type="button" id="noShortTerm" value="I don\'t have short term insurance" onclick="yesOrNo(\'noShortTerm\')">
            <input type="button" id="haveShortTerm" value="I have short term insurance" onclick="yesOrNo(\'haveShortTerm\')">
            <form action="dataPages/autoMail.php" method="POST" class="extra">
                <h3>Please enter your info and someone will get in contact with you</h3>
                <table id="disabilityInfo">
                    <tr>
                        <td>Please enter your first name</td>
                        <td><input type="text" name="firstName" id="firstName"></td>
                    </tr>
                    <tr>
                        <td>Please enter your surname</td>
                        <td><input type="text" name="lastName" id="lastName"></td>
                    </tr>
                    <tr>
                        <td>Please enter your ID number</td>
                        <td><input type="text" name="idNumber" id="idNumber"></td>
                    </tr>
                    <tr>
                        <td>Please enter your cellphone number</td>
                        <td><input type="text" name="cellNumber" id="cellNumber"></td>
                    </tr>
                    <tr>
                        <td>Please enter your email address</td>
                        <td><input type="text" name="emailAddress" id="emailAddress"></td>
                    </tr>
                </table>
                <div id="scheduleUpload"></div>
            </form>
            ';
            echo '<p id="status"></p>';

        }
        elseif(isset($_POST['will'])){
            include('Reports/will.php');
            $_SESSION['will'] = true;
            echo '
                <form action="dataPages/autoMail.php" method="POST" class="extra" style="visibility: hidden">
                    <h3>Please enter your info and someone will get in contact with you</h3>
                    <table id="willInfo">
                        <tr>
                            <td>Please enter your first name</td>
                            <td><input type="text" name="firstName" id="firstName"></td>
                        </tr>
                        <tr>
                            <td>Please enter your surname</td>
                            <td><input type="text" name="lastName" id="lastName"></td>
                        </tr>
                        <tr>
                            <td>Please enter your ID number</td>
                            <td><input type="text" name="idNumber" id="idNumber"></td>
                        </tr>
                        <tr>
                            <td>Please enter your cellphone number</td>
                            <td><input type="text" name="cellNumber" id="cellNumber"></td>
                        </tr>
                        <tr>
                            <td>Please enter your email address</td>
                            <td><input type="text" name="emailAddress" id="emailAddress"></td>
                        </tr>
                    </table>
                    <input type="submit" name="submitInfo" id="submitWillInfo">
                </form>
            ';

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
