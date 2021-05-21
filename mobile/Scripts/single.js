// let errors = [];

// function removeError(value) {
//     let i = 0;
//     while (i < errors.length) {
//         if (errors[i] == value) {
//             errors.splice(i, 1);
//         } else {
//             i++;
//         }
//     }

// }

// function checkInput(id) {
//     switch (id) {
//         case 'firstName':
//             if (document.getElementById(id).value == "") {
//                 errors.push("Name is empty");
//                 for (let i = 0; i < errors.length; i++) {
//                     if (errors[i] === "Name is empty") {
//                         document.getElementById('nameError').innerText = errors[i].toString();
//                     }
//                 }
//             } else {
//                 removeError('Name is empty');
//                 document.getElementById('nameError').innerText = "";
//                 console.log(errors);
//             }
//             break;
//         case 'surname':
//             if (document.getElementById(id).value == "") {
//                 errors.push("Surname is empty");
//                 for (let i = 0; i < errors.length; i++) {
//                     if (errors[i] === "Surname is empty") {
//                         document.getElementById('lNameError').innerText = errors[i].toString();
//                     }
//                 }
//             } else {
//                 removeError('Surname is empty');
//                 document.getElementById('lNameError').innerText = "";
//                 console.log(errors);
//             }
//             break;
//         case 'email':
//             if (document.getElementById(id).value == "") {
//                 errors.push("Email is empty");
//                 for (let i = 0; i < errors.length; i++) {
//                     if (errors[i] === "Email is empty") {
//                         document.getElementById('emailError').innerText = errors[i].toString();
//                     }
//                 }
//             } else if (!document.getElementById(id).value.includes('@')) {
//                 errors.push("Email is invalid");
//                 for (let i = 0; i < errors.length; i++) {
//                     if (errors[i] === "Email is invalid") {
//                         document.getElementById('emailError').innerText = errors[i].toString();
//                     }
//                 }
//             } else {
//                 removeError('Email is empty');
//                 removeError('Email is invalid');
//                 document.getElementById('emailError').innerText = "";
//                 console.log(errors);
//             }
//             break;
//         case 'idNum':
//             if (document.getElementById(id).value == "") {
//                 errors.push("ID is empty");
//                 for (let i = 0; i < errors.length; i++) {
//                     if (errors[i] === "ID is empty") {
//                         document.getElementById('idError').innerText = errors[i].toString();
//                     }
//                 }
//             } else if (document.getElementById(id).value.length < 13) {
//                 errors.push("ID is too short");
//                 for (let i = 0; i < errors.length; i++) {
//                     if (errors[i] === "ID is too short") {
//                         document.getElementById('idError').innerText = errors[i].toString();
//                     }
//                 }
//             } else {
//                 removeError('ID is empty');
//                 removeError('ID is too short');
//                 document.getElementById('idError').innerText = "";
//                 console.log(errors);
//             }
//             break;
//         case 'cell':
//             if (document.getElementById(id).value == "") {
//                 errors.push("Number is empty");
//                 for (let i = 0; i < errors.length; i++) {
//                     if (errors[i] === "Number is empty") {
//                         document.getElementById('cellError').innerText = errors[i].toString();
//                     }
//                 }
//             } else if (document.getElementById(id).value.length < 10) {
//                 errors.push("Number is too short");
//                 for (let i = 0; i < errors.length; i++) {
//                     if (errors[i] === "Number is too short") {
//                         document.getElementById('cellError').innerText = errors[i].toString();
//                     }
//                 }
//             } else {
//                 removeError('Number is too short');
//                 removeError('Number is empty');
//                 document.getElementById('cellError').innerText = "";
//                 console.log(errors);
//             }
//             break;
//         case 'question':
//             if (document.getElementById(id).value == "") {
//                 errors.push("Question is empty");
//                 for (let i = 0; i < errors.length; i++) {
//                     if (errors[i] === "Question is empty") {
//                         document.getElementById('questionError').innerText = errors[i].toString();
//                     }
//                 }
//             } else {
//                 removeError('Question is empty');
//                 document.getElementById('questionError').innerText = "";
//                 console.log(errors);
//             }
//             if (errors.length == 0) {
//                 document.getElementById('submit').disabled = false;
//             }
//             break;
//     }

// }

function getAge() {
    let idNumber = document.getElementById('idNum').value;

    if (idNumber.length == 13) {
        let Year = idNumber.substring(0, 2);
        if (Year - 2000 < 0) {
            Year = '19' + Year;
        }
        let Month = idNumber.substring(2, 4);
        let Day = idNumber.substring(4, 6);

        let today = new Date();
        let age = today.getFullYear() - Year;
        if (today.getMonth() + 1 < Month || today.getMonth() + 1 == Month && today.getDate() < Day) {
            age--;
        }

        let gender = idNumber.substring(6, 10);
        if (gender >= 0000 && gender <= 4999) {
            document.getElementById('gender').value = 'female';
            document.getElementById('genderAnswer').value = 'female';
        } else if (gender >= 5000 && gender <= 9999) {
            document.getElementById('gender').value = 'male';
            document.getElementById('genderAnswer').value = 'male';
        }


        document.getElementById('age').value = age;
        document.getElementById('ageAnswer').value = age;
        document.getElementById('idNumberAnswer').value = idNumber;
    }
}
let counter = 1;
let score = 0;




function addScore() {
    document.getElementById('next').value = 'Next Question';
    switch (counter) {
        case 2:
            document.getElementById('firstNameAnswer').value = document.getElementById('firstName').value;
            break;
        case 3:
            document.getElementById('surnameAnswer').value = document.getElementById('lastName').value;
            break;
        case 4:
            document.getElementById('emailAddressAnswer').value = document.getElementById('emailAddress').value;
            break;
        case 5:
            if (document.getElementById('age').value == 20 || document.getElementById('age').value <= 25) {
                score = 1;
            } else if (document.getElementById('age').value == 25 || document.getElementById('age').value <= 35) {
                score = 2;
            } else if (document.getElementById('age').value == 35 || document.getElementById('age').value <= 45) {
                score = 3;
            } else if (document.getElementById('age').value == 45 || document.getElementById('age').value <= 65) {
                score = 4;
            } else if (document.getElementById('age').value >= 65) {
                score = 5;
            }
            if (document.getElementById('gender').value == 'male') {
                score += 2;
            } else {
                score += 1;
            }
            document.getElementById('id')
            console.log(`Your score is: ${score}`);
            break;
        case 6:
            if (document.getElementById('employment').value == 'self employed') {
                score += 1;
            } else if (document.getElementById('employment').value == 'salary') {
                score += 2;
            } else if (document.getElementById('employment').value == 'pension') {
                score += 3;
            }
            document.getElementById('employmentAnswer').value = document.getElementById('employment').value;
            console.log(`Your score is: ${score}`);
            break;
        case 7:
            if (document.getElementById('maritalStatus').value == 'married') {
                score += 3;
            } else if (document.getElementById('maritalStatus').value == 'single') {
                score += 1;
            }
            document.getElementById('maritalStatusAnswer').value = document.getElementById('maritalStatus').value;
            console.log(`Your score is: ${score}`);
            break;
        case 8:
            if (document.getElementById('lumpSum').value == 'yes') {
                score += 0;
            } else if (document.getElementById('lumpSum').value == 'no') {
                score += 2;
            }
            document.getElementById('lumpSumAnswer').value = document.getElementById('lumpSum').value;
            console.log(`Your score is: ${score}`);
            break;
        case 9:
            if (document.getElementById('saving').value == 'yes') {
                score += 0;
            } else if (document.getElementById('saving').value == 'no') {
                score += 5;
            }
            document.getElementById('savingAnswer').value = document.getElementById('saving').value
            console.log(`Your score is: ${score}`);
            break;
        case 10:
            if (document.getElementById('future').value == 'confident') {
                score += 0;
            } else if (document.getElementById('future').value == 'anxious') {
                score += 2;
            }
            document.getElementById('futureAnswer').value = document.getElementById('future').value;
            console.log(`Your score is: ${score}`);
            break;
        case 11:
            if (document.getElementById('marketDrop').value == 'stay invested') {
                score += 0;
            } else if (document.getElementById('marketDrop').value == 'switch') {
                score += 2;
            } else if (document.getElementById('marketDrop').value == 'withdraw') {
                score += 5;
            }
            document.getElementById('marketDropAnswer').value = document.getElementById('marketDrop').value;
            console.log(`Your score is: ${score}`);
            break;
        case 12:
            if (document.getElementById('guaranteedOrPotential').value == 'guaranteed') {
                score += 5;
            } else if (document.getElementById('guaranteedOrPotential').value == 'potential') {
                score += 1;
            }
            document.getElementById('guaranteedOrPotentialAnswer').value = document.getElementById('guaranteedOrPotential').value;
            console.log(`Your score is: ${score}`);
            break;
        case 13:
            if (document.getElementById('settle').value == '5-10') {
                score += 3;
            } else if (document.getElementById('settle').value == '-10-25') {
                score += 0;
            }
            document.getElementById('settleAnswer').value = document.getElementById('settle').value;
            if (score >= 7 && score <= 15) {
                document.getElementById('score').innerHTML = 'You are considered an adventurous investor';
            } else if (score >= 15 && score <= 25) {
                document.getElementById('score').innerHTML = 'You have a medium risk appetite';
            } else if (score >= 25 && score <= 35) {
                document.getElementById('score').innerHTML = 'You are considered a conservative investor';
            }
            document.getElementById('scoreAnswer').value = document.getElementById('score').innerHTML;
            document.getElementById('next').style.visibility = 'hidden';
            document.getElementById('submit').style.visibility = 'visible';
            break;

    }
}


function showQuestion() {
    str = counter;
    addScore();
    counter++;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("questions").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", 'dataPages/savingsAndRetirement.php?q=' + str, true);
    xmlhttp.send();
}

function yesOrNo(id) {
    switch (id) {
        case 'haveShortTerm':
            scheduleUpload();
            break;
        case 'needWill':
            noCover();
            break;

    }
}

function noCover() {
    document.querySelector('.extra').style.visibility = "visible";

}

function scheduleUpload() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("scheduleUpload").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", 'Reports/scheduleUpload.php', true);
    xmlhttp.send();
}

function uploadSchedule(event) {
    document.getElementById('status').innerHTML = 'Uploading...';
    let schedule = document.getElementById('schedule');
    let firstName = document.getElementById('firstName').value;
    let lastName = document.getElementById('lastName').value;
    let idNumber = document.getElementById('idNumber').value;
    let cellNumber = document.getElementById('cellNumber').value;
    let emailAddress = document.getElementById('emailAddress').value;
    let files = schedule.files;
    let formData = new FormData();
    let file = files[0];

    formData.append('schedule', file, file.name);
    formData.append('firstName', firstName);
    formData.append('lastName', lastName);
    formData.append('idNumber', idNumber);
    formData.append('cellNumber', cellNumber);
    formData.append('emailAddress', emailAddress);
    let xmlhttp = new XMLHttpRequest();

    xmlhttp.open('POST', 'dataPages/upload.php', true);

    xmlhttp.onload = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('status').innerHTML = 'File Uploaded and sent';
        }
    };

    xmlhttp.send(formData);
}