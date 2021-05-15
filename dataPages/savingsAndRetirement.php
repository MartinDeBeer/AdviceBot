<?php

    error_reporting (E_ALL ^ E_NOTICE);

    if(isset($_GET['q'])){
        $q = intval($_GET['q']);
    }

switch($q){
    case 1:
        echo 'What is your first name? ';
        echo '<input type="text">';
        break;
    case 2:
        echo 'What is your last name? ';
        echo '<input type="text">';
        break;
    case 3:
        echo '<table>';
        echo '<tr>';
        echo '<td>Please input your ID number: </td>';
        echo '<td><input type="text" id="idNum" oninput="getAge()"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Your age is: </td>';
        echo '<td><input type="text" id="age"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Your gender is: </td>';
        echo '<td><input type="text" id="gender"></td>';
        echo '</tr>';
        break;
    case 4:
        echo 'Are you self-employed or a salary worker?<br>';
        echo '
            <select name="employment" id="employment">
                <option value="self employed">Self Employed</option>
                <option value="salary">Salary</option>
                <option value="pension">Pension</option>
            </select>';
        break;
    case 5:
        echo 'Marital Status: <br>';
        echo '
            <select name="maritalStatus" id="maritalStatus">
                <option value="married">Married</option>
                <option value="single">Single</option>
            </select>';
        break;
    case 6:
        echo 'Do you have a lump sum to invest?<br>';
        echo '
            <select name="lumpSum" id="lumpSum">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>';
        break;
    case 7:
        echo 'Do you intend to save a monthly amount?<br>';
        echo '
            <select name="saving" id="saving">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>';
        break;
    case 8:
        echo 'How do you feel about your financial future?<br>';
        echo '
            <select name="future" id="future">
                <option value="confident">Confident</option>
                <option value="anxious">Anxious</option>
            </select>';
        break;
    case 9:
        echo 'The market dropped quickly and your portfolio value dropped by -20%. What would you do?<br>';
        echo '
            <select name="marketDrop" id="marketDrop">
                <option value="stay invested">Stay Invested</option>
                <option value="switch">Switch Portfolios</option>
                <option value="withdraw">Withdraw Everything</option>
            </select>';
        break;
    case 10:
        echo 'Would you settle for a guaranteed return of between 5% or a potential return of 0% and 15%?<br>';
        echo '
            <select name="guaranteedOrPotential" id="guaranteedOrPotential">
                <option value="guaranteed">5%</option>
                <option value="potential">0% to 15% </option>
            </select>';
        break; 
    case 11:
        echo 'Would you settle for a potential return of between 5% and 10% or a potential return of between -10% and 25%?<br>';
        echo '
            <select name="settle" id="settle">
                <option value="5-10">5% to 10%</option>
                <option value="-10-25">-10% to 25% </option>
            </select>';
        break; 


}





?>
