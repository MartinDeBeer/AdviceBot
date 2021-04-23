let skipMarriage = false;
let skipKids = false;
let liabilities = 0;
let assets = 0;
let sumAssetsAndLiabilities = 0;
let deathCover = 0;
let disability = 0;
let savings = 0;
let retirement = 0;
let will = 0;
let shortTermInsurance = 0;
let counter = 3;

function getDate() {
    let today = new Date();
    let day = today.getDate();
    let month = today.getMonth();
    let year = today.getFullYear();

    let date = year + "/" + (month + 1) + "/" + day;
    document.getElementById('date').value = date;
}


function skipQuestion() {
    if (counter == 7) {
        if (document.getElementById('marriage').value == 'yes') {
            skipMarriage = true;
        }
    }
    if (counter == 8) {
        if (document.getElementById('kids').value == 'yes') {
            skipKids = true;
        }
    }
}

function calculateTotalAssetsMinLiabilities() {
    if (counter == 13) {
        assets = Number(document.getElementById('assetValue').value);
        console.log('Assets: ', assets)
    }
    if (counter == 14) {
        liabilities = Number(document.getElementById('liabilitiesValue').value);
        sumAssetsAndLiabilities = assets - liabilities
        console.log('Total: ', sumAssetsAndLiabilities);
    }
}

function updateWeight() {

    switch (counter) {
        case 5:
            document.getElementById('budgetAnswer').value = document.getElementById('budget').value;
            break;

        case 7:
            if (document.getElementById('marriage').value == 'yes') {
                deathCover += 5;
                disability = 5;
                savings = 1;
                retirement = 1;
            } else {
                savings += 5;
                retirement += 5
            }
            document.getElementById('marriageAnswer').value = document.getElementById('marriage').value;
            break;

        case 8:
            if (document.getElementById('kids').value == 'yes') {
                deathCover += 5;
                disability += 5;
                savings += 1;
                retirement += 1;
            } else {
                savings += 5;
                retirement += 5
            }
            document.getElementById('kidsAnswer').value = document.getElementById('kids').value;
            break;

        case 10:
            if (document.getElementById('will').value == 'no') {
                will = 1;
            } else {
                will = 0;
            }
            document.getElementById('willAnswer').value = document.getElementById('will').value;
            break;

        case 11:
            if (document.getElementById('employment').value == 'Self Employed') {
                deathCover += 5;
                disability += 5;
                savings += 1;
                retirement += 1;
            } else {
                deathCover += 2;
                disability += 2;
                savings += 5;
                retirement += 5;
            }
            document.getElementById('employmentAnswer').value = document.getElementById('employment').value;
            break;

        case 12:
            if (document.getElementById('salaryValue').value >= 0 && document.getElementById('salaryValue').value <= 120000) {
                deathCover += 2;
                disability += 2;
                savings += 6;
                retirement += 6;
            } else if (document.getElementById('salaryValue').value >= 120001 && document.getElementById('salaryValue').value <= 360000) {
                deathCover += 3;
                disability += 3;
                savings += 5;
                retirement += 5;
            } else if (document.getElementById('salaryValue').value >= 360001 && document.getElementById('salaryValue').value <= 600000) {
                deathCover += 4;
                disability += 4;
                savings += 1;
                retirement += 1;
            } else {
                deathCover += 5;
                disability += 5;
                savings += 1;
                retirement += 1;
            }
            document.getElementById('incomeAnswer').value = document.getElementById('salaryValue').value;
            break;

        case 13:
            document.getElementById('assetsAnswer').value = document.getElementById('assetValue').value;
            break;

        case 14:
            document.getElementById('liabilitiesAnswer').value = document.getElementById('liabilitiesValue').value;
            break;

        case 15:
            if (sumAssetsAndLiabilities >= 0 && sumAssetsAndLiabilities <= 250000) {
                deathCover += 1;
                disability += 1;
                savings += 6;
                retirement += 6;
            } else if (sumAssetsAndLiabilities >= 250000 && sumAssetsAndLiabilities <= 500000) {
                deathCover += 3;
                disability += 2;
                savings += 5;
                retirement += 5;
            } else if (sumAssetsAndLiabilities >= 500000 && sumAssetsAndLiabilities <= 1000000) {
                deathCover += 3;
                disability += 3;
                savings += 4;
                retirement += 5;
            } else if (sumAssetsAndLiabilities >= 1000000 && sumAssetsAndLiabilities <= 2500000) {
                deathCover += 4;
                disability += 2;
                savings += 2;
                retirement += 4;
            } else if (sumAssetsAndLiabilities >= 2500000 && sumAssetsAndLiabilities <= 5000000) {
                deathCover += 5;
                disability += 2;
                savings += 1;
                retirement += 1;
            } else {
                deathCover += 6;
                disability += 2;
                savings += 1;
                retirement += 0;
            }
            break;

        case 16:
            if (document.getElementById('health').value == 'good') {
                deathCover += 5;
                disability += 2;
                savings += 0;
                retirement += 0;
            } else if (document.getElementById('health').value == 'average') {
                deathCover += 5;
                disability += 4;
                savings += 5;
                retirement += 6;
            } else {
                deathCover += 0;
                disability += 0;
                savings += 6;
                retirement += 6;
            }
            document.getElementById('healthAnswer').value = document.getElementById('health').value;
            break;

        case 17:
            if (document.getElementById('diseases').value == 'yes') {
                deathCover += 6;
                disability += 6;
                savings += 0;
                retirement += 0;
            } else {
                deathCover += 0;
                disability += 0;
                savings += 5;
                retirement += 5;
            }
            document.getElementById('diseasesAnswer').value = document.getElementById('diseases').value;
            break;

        case 19:
            if (document.getElementById('marriageGoal').value == 'yes') {
                deathCover += 5;
                disability += 3;
                savings += 0;
                retirement += 2;
            } else {
                deathCover += 0;
                disability += 0;
                savings += 5;
                retirement += 5;
            }
            document.getElementById('marriageGoalAnswer').value = document.getElementById('marriageGoal').value;
            break;

        case 20:
            if (document.getElementById('kidsGoal').value == 'yes') {
                deathCover += 5;
                disability += 3;
                savings += 0;
                retirement += 2;
            } else {
                deathCover += 0;
                disability += 0;
                savings += 5;
                retirement += 5;
            }
            document.getElementById('kidsGoalAnswer').value = document.getElementById('kidsGoal').value;
            break;

        case 21:
            if (document.getElementById('holidayGoal').value == 'yes') {
                deathCover += 0;
                disability += 0;
                savings += 6;
                retirement += 0;
            } else {
                deathCover += 0;
                disability += 0;
                savings += 0;
                retirement += 0;
            }
            document.getElementById('holidayGoalAnswer').value = document.getElementById('holidayGoal').value;
            break;

        case 22:
            if (document.getElementById('jobGoal').value == 'yes') {
                deathCover += 0;
                disability += 0;
                savings += 5;
                retirement += 5;
            } else {
                deathCover += 0;
                disability += 0;
                savings += 0;
                retirement += 0;
            }
            document.getElementById('jobGoalAnswer').value = document.getElementById('jobGoal').value;
            break;

        case 23:
            if (document.getElementById('propertyGoal').value == 'yes') {
                deathCover += 5;
                disability += 0;
                savings += 0;
                retirement += 5;
            } else {
                deathCover += 0;
                disability += 0;
                savings += 0;
                retirement += 0;
            }
            document.getElementById('propertyGoalAnswer').value = document.getElementById('propertyGoal').value;
            break;

        case 24:
            if (document.getElementById('businessGoal').value == 'yes') {
                deathCover += 0;
                disability += 0;
                savings += 0;
                retirement += 6;
            } else {
                deathCover += 0;
                disability += 0;
                savings += 5;
                retirement += 0;
            }
            document.getElementById('businessGoalAnswer').value = document.getElementById('businessGoal').value;
            break;

        case 26:
            if (document.getElementById('retirementAge').value == 'young') {
                deathCover += 0;
                disability += 0;
                savings += 7;
                retirement += 0;
            } else if (document.getElementById('retirementAge').value == 'youngToMid') {
                deathCover += 0;
                disability += 0;
                savings += 6;
                retirement += 0;
            } else if (document.getElementById('retirementAge').value == 'mid') {
                deathCover += 0;
                disability += 0;
                savings += 5;
                retirement += 0;
            } else if (document.getElementById('retirementAge').value == 'midToOld') {
                deathCover += 0;
                disability += 0;
                savings += 2;
                retirement += 0;
            } else {
                deathCover += 0;
                disability += 0;
                savings += 1;
                retirement += 0;
            }
            document.getElementById('retirementAgeAnswer').value = document.getElementById('retirementAge').value;
            break;

        case 27:
            if (document.getElementById('extendedFamily').value == 'supporting') {
                deathCover += 5;
                disability += 5;
                alert("I can provide life or funeral cover to recoup your expenses");
            }
            if (document.getElementById('extendedFamily').value == 'beingSupported') {
                retirement += 6;
            }
            document.getElementById('extendedFamilyAnswer').value = document.getElementById('extendedFamily').value;
            break;

        case 28:
            if (document.getElementById('propertyOwned').value == 'owned') {
                deathCover += 5;
                disability += 5;
                shortTermInsurance += 5;
            } else if (document.getElementById('propertyOwned').value == 'rent') {
                deathCover += 0;
                disability += 5;
                savings += 6;
                retirement += 6;
                shortTermInsurance += 2;
            } else if (document.getElementById('propertyOwned').value == 'notApplicable') {
                savings += 3;
                retirement += 6;
            }
            document.getElementById('propertyOwnedAnswer').value = document.getElementById('propertyOwned').value
            break;

        case 29:
            if (document.getElementById('vehicleOwned').value == 'yes') {
                deathCover += 3;
                disability += 5;
                savings += 0;
                retirement += 0;
                shortTermInsurance += 5;
                will += 0
                alert("Your vehicle must at least be insured for 3rd party liability. It's worth it and not that expensive. I have a whole lot of options for you.");
            } else if (document.getElementById('vehicleOwned').value == 'no') {
                deathCover += 0;
                disability += 0;
                savings += 0;
                shortTermInsurance += 0;
                will += 0
                retirement += 6;
            }
            console.log(deathCover);
            console.log(disability);
            console.log(savings);
            console.log(retirement);
            console.log(shortTermInsurance);
            console.log(will);
            document.getElementById('deathCover').value = deathCover;
            document.getElementById('disabilityW').value = disability;
            document.getElementById('savingsW').value = savings;
            document.getElementById('retirementW').value = retirement;
            document.getElementById('shortTermInsurance').value = shortTermInsurance;
            document.getElementById('willWeight').value = will;
            document.getElementById('vehicleOwnedAnswer').value = document.getElementById('vehicleOwned').value;
            getDate();
            document.getElementById('submitAnswers').style.visibility = "visible";
            break;


    }

}

function playVid() {
    document.getElementById('vid').play();
}


function showQuestion() {
    document.getElementById('Budget').innerHTML = "";
    document.getElementById("questionProgress").value = counter;
    playVid();
    skipQuestion();
    calculateTotalAssetsMinLiabilities();
    updateWeight();
    if (skipMarriage == true) {
        if (counter == 18) {
            counter = 19;
            document.getElementById('marriageGoalAnswer').value = 'no';
        }
    }
    if (skipKids == true) {
        if (counter == 19) {
            counter = 20;
            document.getElementById('kidsGoalAnswer').value = 'no';
        }
    }
    counter++;
    str = counter;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("questions").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", '../dataPages/questions.php?q=' + str, true);
    xmlhttp.send();
}



function registered() {

    document.getElementById('loggedIn').style.visibility = "hidden";
    document.getElementById('roboAdvice').style.visibility = "visible";
    document.getElementById('buttons').style.visibility = 'visible';

    playVid();
    if (skipMarriage == true) {
        if (counter == 19) {
            counter = 20;
        }
    }
    if (skipKids == true) {
        if (counter == 20) {
            counter = 21;
        }
    }

    skipQuestion();
    calculateTotalAssetsMinLiabilities();
    updateWeight();
    counter++;
    str = counter;
    console.log(str);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("questions").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", '../dataPages/questions.php?q=' + str, true);
    xmlhttp.send();
}

if (document.getElementById('loggedIn')) {
    alert("Hello world");
}


function budget() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("Budget").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", 'Tools/budget.php', true);
    xmlhttp.send();
}