function changeStyle(id) {
    document.getElementById(id).style.borderLeft = '1px solid black';
}

function yesOrNo(id) {
    let element = document.getElementById(id).value;
    switch (id) {
        case 'needLife':
            document.querySelector('#lifeYesNo').innerHTML = element;
            changeStyle(id);
            break;
        case 'haveLife':
            document.querySelector('#lifeYesNo').innerHTML = element;
            changeStyle(id);
            haveCover();
            break;
        case 'needTrauma':
            document.querySelector('#disabilityYesNo').innerText = element;
            changeStyle(id);
            break;
        case 'haveTrauma':
            document.querySelector('#disabilityYesNo').innerText = element;
            changeStyle(id);
            haveCover();
            break;
        case 'noSavings':
            document.querySelector('#savingsYesNo').innerText = element;
            changeStyle(id);
            break;
        case 'haveSavings':
            document.querySelector('#savingsYesNo').innerText = element;
            changeStyle(id);
            haveCover();
            break;
        case 'noRetirement':
            document.querySelector('#retirementYesNo').innerText = element;
            changeStyle(id);
            break;
        case 'haveRetirement':
            document.querySelector('#retirementYesNo').innerText = element;
            changeStyle(id);
            break;
    }
}

function haveCover() {
    document.querySelector('.extra').style.visibility = "visible";

}

function showSupposed(id) {
    document.getElementById('supposed').style.visibility = "visible";
    let coverAmount;
    if (id == "life") {
        coverAmount = document.getElementById('lifeCoverAmount').value;

    } else {
        coverAmount = document.getElementById('disabilityAmount').value;
    }
    let supposedAmount = document.getElementById('supposedAmount').value;
    let diff = Number(supposedAmount) - Number(coverAmount);
    if (Number(document.getElementById('supposedAmount').value) - Number(coverAmount) > 0) {
        document.getElementById('diff').innerText = `Cover needed: R${diff} `;
        document.querySelector('.answer').innerText = diff;
    } else {
        document.getElementById('diff').innerText = `Cover needed: R0`
    }
}


function checkBoxes() {
    let checks = document.getElementsByClassName('check');
    console.log(checks);
    let checksList = Array.from(checks);
    checksList.forEach(function(check) {
        document.getElementById(check.id).click();
    });

}