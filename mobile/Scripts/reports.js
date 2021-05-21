function changeStyle(id) {
    document.getElementById(id).style.borderLeft = '1px solid black';
}

function yesOrNo(id) {
    let element = document.getElementById(id).value;
    switch (id) {
        case 'needLife':
            document.querySelector('#lifeYesNo').value = 'I don\'t have life cover';
            changeStyle(id);
            break;
        case 'haveLife':
            document.querySelector('#lifeYesNo').value = 'I have life cover';
            changeStyle(id);
            haveCover();
            break;
        case 'needTrauma':
            document.querySelector('#disabilityYesNo').value = element;
            changeStyle(id);
            break;
        case 'haveTrauma':
            document.querySelector('#disabilityYesNo').value = element;
            changeStyle(id);
            haveCover();
            break;
        case 'noSavings':
            document.querySelector('#savingsYesNo').value = element;
            changeStyle(id);
            haveCover();
            break;
        case 'haveSavings':
            document.querySelector('#savingsYesNo').value = element;
            changeStyle(id);
            break;
        case 'noRetirement':
            document.querySelector('#retirementYesNo').value = element;
            changeStyle(id);
            break;
        case 'haveRetirement':
            document.querySelector('#retirementYesNo').value = element;
            changeStyle(id);
            break;
        case 'haveShortTerm':
            document.querySelector('#shortTermYesNo').value = element;
            changeStyle(id);
            scheduleUpload();
            break;
        case 'noShortTerm':
            document.querySelector('#shortTermYesNo').value = element;
            changeStyle(id);
            break;
        case 'needWill':
            document.querySelector('#willYesNo').value = element;
            break;
        case 'haveWill':
            document.querySelector('#willYesNo').value = element;
            break;
    }
}

function submitSchedule(event) {
    event.preventDefault();
}

function haveCover() {
    document.querySelector('.extra').style.visibility = "visible";

}

function showSupposed(id) {
    document.getElementById('supposed').style.visibility = "visible";
    let coverAmount;
    let supposedAmount = document.getElementById('supposedAmount').value;
    if (id == "life") {
        coverAmount = document.getElementById('lifeCoverAmount').value;
        document.querySelector('#lifeAmount').value = `R${coverAmount}`;
        document.querySelector("#lifeAmountNeeded").value = `R${supposedAmount}`;

        let diff = Number(supposedAmount) - Number(coverAmount);
        if (Number(document.getElementById('supposedAmount').value) - Number(coverAmount) > 0) {
            document.querySelector('#lifeAmountDiff').value = `Cover needed: R${diff}`;
            document.getElementById('diff').value = `Cover needed: R${diff} `;
        } else {
            document.getElementById('diff').value = `Cover needed: R0`;
            document.querySelector('#lifeAmountDiff').value = `Cover needed: R0`;
        }


    } else {
        coverAmount = document.getElementById('disabilityAmount').value;
        document.querySelector('#traumaAmount').value = `R${coverAmount}`;
        document.querySelector('#traumaAmountNeeded').value = `R${supposedAmount}`;

        let diff = Number(supposedAmount) - Number(coverAmount);
        if (Number(document.getElementById('supposedAmount').value) - Number(coverAmount) > 0) {
            document.getElementById('diff').value = `Cover needed: R${diff} `;
            document.querySelector('#traumaAmountDiff').value = `Cover needed: R${diff} `;
        } else {
            document.getElementById('diff').value = `Cover needed: R0`;
            document.querySelector('#traumaAmountDiff').value = `Cover needed: R0`;
        }
    }
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

// async function uploadSchedule() {
//     let formData = new FormData();

//     formData.append("schedule", file, document.getElementById('schedule').file);
//     await fetch('dataPages/upload.php', {
//         method: "POST",
//         body: formData
//     });
//     alert('The file has been uploaded successfully.');

// }

function uploadSchedule(event) {
    let schedule = document.getElementById('schedule');
    let files = schedule.files;
    let formData = new FormData();
    let file = files[0];

    formData.append('schedule', file, file.name);

    let xmlhttp = new XMLHttpRequest();

    xmlhttp.open('POST', 'dataPages/upload.php', true);

    xmlhttp.onload = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('uploadedSchedule').value = file.name;
        }
    };

    xmlhttp.send(formData);
}