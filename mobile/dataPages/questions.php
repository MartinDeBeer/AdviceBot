<?php
$q = intval($_GET['q']);

include("connectDB.php");

$command = "SELECT * FROM questions WHERE questionID = '".$q."'";
$result = $conn -> query($command);
$row = mysqli_fetch_array($result);

function buildAspects(){
    $i = 0;
    $aspects = array(
        'Saving and Investing',
        'Retirement planning',
        'Life insurance',
        'Disability and Dreaded Decease cover',
        'Your Last Will and Testament',
        'Short-term Insurance'
    );

    while($i < count($aspects)){
        echo '<li>' . $aspects[$i] . '</li>';
        $i++;
    }
}



switch($row['typeID']){
    case 1:
        if($row['questionID'] == 5){
            echo $row['question'] . '<br />';
            echo 'R<input class="question" type="text" id="' . $row['object'] . '" onkeypress="nextQuestion(event)" ><br>';
            echo 'Use our free budget tool <a href=# onclick="budget()">here.</a>';
        }else{
            echo $q;
            echo $row['question'] . '<br />';
            echo '<input class="question" type="text" id="' . $row['object'] . '" onkeypress="nextQuestion(event)">';
        }
        
    break;
    case 2:
        if($row['questionID'] == 4){
            echo '<h3  id="' . $row['object'] . '">' .  $row['question'] . '</h3>'; 
            echo '<ul class="question" id="aspectList" >';
            buildAspects();
            echo '</ul>';
        }
        else{
            echo '<h3 class="question" id="' . $row['object'] . '">' .  $row['question'] . '</h3>';
        }
            
    break;
    case 3:
        echo $row['question'] . '<br />';
        if($row['questionID'] == 11){
            echo '<select class="question" id="' . $row['object'] . '" onkeypress="nextQuestion(event)">';
            echo '<option value="none">Select An Option</option>';
            echo '<option value="Self Employed">Self-Employed</option>';
            echo '<option value="Salary">Salary</option>';
            echo '</select>';
        }
        else if($row['questionID'] == 12){
            echo '<select class="question" id="' . $row['object'] . '" onkeypress="nextQuestion(event)">';
            echo '<option value="none">Select An Option</option>';
            echo '<option value="min">0 - 10000</option>';
            echo '<option value="low">10000 - 30000</option>';
            echo '<option value="low-max">30000 - 50000</option>';
            echo '<option value="max">50000 + </option>';
            echo '</select>';
        }
        else if($row['questionID'] == 16){
            echo '<select class="question" id="' . $row['object'] . '" onkeypress="nextQuestion(event)">';
            echo '<option value="none">Select An Option</option>';
            echo '<option value="good">Good</option>';
            echo '<option value="average">Average</option>';
            echo '<option value="bad">Bad</option>';
            echo '</select>';
        }
        else if($row['questionID'] == 26){
            echo '<select class="question" id="' . $row['object'] . '" onkeypress="nextQuestion(event)">';
            echo '<option value="none">Select An Option</option>';
            echo '<option value="young">0 - 40</option>';
            echo '<option value="youngToMid">40 - 50</option>';
            echo '<option value="mid">50 - 65</option>';
            echo '<option value="midToOld">65 - 75</option>';
            echo '<option value="old">75+</option>';
            echo '</select>';
        }
        else if($row['questionID'] == 27){
            echo '<select class="question" id="' . $row['object'] . '" onkeypress="nextQuestion(event)">';
            echo '<option value="none">Select An Option</option>';
            echo '<option value="supporting" onclick="support(\'family\')">I support them</option>';
            echo '<option value="beingSupported">They support me</option>';
            echo '<option value="notApplicable">N/A</option>';
            echo '</select>';
        }
        else if($row['questionID'] == 28){
            echo '<select class="question" id="' . $row['object'] . '" onkeypress="nextQuestion(event)">';
            echo '<option value="none">Select An Option</option>';
            echo '<option value="owned">I own property</option>';
            echo '<option value="rent">I rent</option>';
            echo '<option value="neither">N/A</option>';
            echo '</select>';
        }
        else if($row['questionID'] == 29){
            echo '<select class="question" id="' . $row['object'] . '" onkeypress="nextQuestion(event)">';
            echo '<option value="none">Select An Option</option>';
            echo '<option onclick="support(\'vehicle\')" value="yes">Yes</option>';
            echo '<option value="no">No</option>';
            echo '</select>';
        }
        else{
            echo '<select class="question" id="' . $row['object'] . '" onkeypress="nextQuestion(event)">';
            echo '<option value="none">Select An Option</option>';
            echo '<option value="yes">Yes</option>';
            echo '<option value="no">No</option>';
            echo '</select>';
        }
    break;
    case 4:
        if($row['object'] == 'assets'){
            echo $row['question'] . '<br />';
            echo '<input type="range" class="question" id="' . $row['object'] . ' min="0" max="100000000" value="0" step="1000" oninput="assetValue.value = this.value" onkeypress="nextQuestion(event)"/>';
            echo 'R<input type="number" class="question" disabled id="assetValue" step="1000" oninput="assets.value = this.value"/>';
        }else if($row['object'] == 'liabilities'){
            echo $row['question'] . '<br />';
            echo '<input type="range" class="question" id="' . $row['object'] . ' min="0" max="100000000" value="0" step="1000" oninput="liabilitiesValue.value = this.value" onkeypress="nextQuestion(event)"/>';
            echo 'R<input type="number" class="question" style="color: #990000;" disabled id="liabilitiesValue" step="1000" oninput="assets.value = this.value" />';
        }else{
            echo $row['question'] . '<br />';
            echo '<input type="range" class="question" id="' . $row['object'] . ' min="0" max="100000000" step="1000" oninput="salaryValue.value = this.value" onkeypress="nextQuestion(event)" />';
            echo 'R<input type="number" class="question"  disabled id="salaryValue" step="1000" oninput="salary.value = this.value" />';
        }
    break;
    case 5:
        echo '<h3 id="' . $row['object'] . '">' . $row['question'] .  '</h3>';
    break;
        
}


?>