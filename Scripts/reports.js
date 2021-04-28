function tellMore(id) {
    let subject = document.getElementById(id).value;
    let address = 'adriaan@advicebot.co.za';
    let body = 'Name: ' + '%0a' + 'Surname: ' + '%0a' + 'ID Number: ' + '%0a' + 'Cellphone Number: ' + '%0a' + 'Ask a question: ';
    window.location.href = "mailto:" + address + "?subject=" + subject + "&body=" + body;
}

function haveCover(id) {
    document.getElementById('amounts').style.visibility = "visible";
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