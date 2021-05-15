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
            haveCover();
            break;
        case 'haveSavings':
            document.querySelector('#savingsYesNo').innerText = element;
            changeStyle(id);
            break;
        case 'noRetirement':
            document.querySelector('#retirementYesNo').innerText = element;
            changeStyle(id);
            break;
        case 'haveRetirement':
            document.querySelector('#retirementYesNo').innerText = element;
            changeStyle(id);
            break;
        case 'haveShortTerm':
            document.querySelector('#shortTermYesNo').innerText = element;
            changeStyle(id);
            document.getElementById("scheduleUpload").style.visibility = "visible";
            break;
        case 'noShortTerm':
            document.querySelector('#shortTermYesNo').innerText = element;
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
    let supposedAmount = document.getElementById('supposedAmount').value;
    if (id == "life") {
        coverAmount = document.getElementById('lifeCoverAmount').value;
        document.querySelector('#lifeAmount').innerText = `R${coverAmount}`;
        document.querySelector("#lifeAmountNeeded").innerText = `R${supposedAmount}`;

        let diff = Number(supposedAmount) - Number(coverAmount);
        if (Number(document.getElementById('supposedAmount').value) - Number(coverAmount) > 0) {
            document.querySelector('#lifeAmountDiff').innerText = `Cover needed: R${diff}`;
            document.getElementById('diff').innerText = `Cover needed: R${diff} `;
        } else {
            document.getElementById('diff').innerText = `Cover needed: R0`;
            document.querySelector('#lifeAmountDiff').innerText = `Cover needed: R0`;
        }


    } else {
        coverAmount = document.getElementById('disabilityAmount').value;
        document.querySelector('#traumaAmount').innerText = `R${coverAmount}`;
        document.querySelector('#traumaAmountNeeded').innerText = `R${supposedAmount}`;

        let diff = Number(supposedAmount) - Number(coverAmount);
        if (Number(document.getElementById('supposedAmount').value) - Number(coverAmount) > 0) {
            document.getElementById('diff').innerText = `Cover needed: R${diff} `;
            document.querySelector('#traumaAmountDiff').innerText = `Cover needed: R${diff} `;
        } else {
            document.getElementById('diff').innerText = `Cover needed: R0`;
            document.querySelector('#traumaAmountDiff').innerText = `Cover needed: R0`;
        }
    }
}