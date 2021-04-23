let errors = [];

function removeError(value) {
    let i = 0;
    while (i < errors.length) {
        if (errors[i] == value) {
            errors.splice(i, 1);
        } else {
            i++;
        }
    }

}

function checkInput(id) {
    switch (id) {
        case 'firstName':
            if (document.getElementById(id).value == "") {
                errors.push("Name is empty");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "Name is empty") {
                        document.getElementById('nameError').innerText = errors[i].toString();
                    }
                }
            } else {
                removeError('Name is empty');
                document.getElementById('nameError').innerText = "";
                console.log(errors);
            }
            break;
        case 'surname':
            if (document.getElementById(id).value == "") {
                errors.push("Surname is empty");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "Surname is empty") {
                        document.getElementById('lNameError').innerText = errors[i].toString();
                    }
                }
            } else {
                removeError('Surname is empty');
                document.getElementById('lNameError').innerText = "";
                console.log(errors);
            }
            break;
        case 'email':
            if (document.getElementById(id).value == "") {
                errors.push("Email is empty");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "Email is empty") {
                        document.getElementById('emailError').innerText = errors[i].toString();
                    }
                }
            } else if (!document.getElementById(id).value.includes('@')) {
                errors.push("Email is invalid");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "Email is invalid") {
                        document.getElementById('emailError').innerText = errors[i].toString();
                    }
                }
            } else {
                removeError('Email is empty');
                removeError('Email is invalid');
                document.getElementById('emailError').innerText = "";
                console.log(errors);
            }
            break;
        case 'idNum':
            if (document.getElementById(id).value == "") {
                errors.push("ID is empty");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "ID is empty") {
                        document.getElementById('idError').innerText = errors[i].toString();
                    }
                }
            } else if (document.getElementById(id).value.length < 13) {
                errors.push("ID is too short");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "ID is too short") {
                        document.getElementById('idError').innerText = errors[i].toString();
                    }
                }
            } else {
                removeError('ID is empty');
                removeError('ID is too short');
                document.getElementById('idError').innerText = "";
                console.log(errors);
            }
            break;
        case 'cell':
            if (document.getElementById(id).value == "") {
                errors.push("Number is empty");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "Number is empty") {
                        document.getElementById('cellError').innerText = errors[i].toString();
                    }
                }
            } else if (document.getElementById(id).value.length < 10) {
                errors.push("Number is too short");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "Number is too short") {
                        document.getElementById('cellError').innerText = errors[i].toString();
                    }
                }
            } else {
                removeError('Number is too short');
                removeError('Number is empty');
                document.getElementById('cellError').innerText = "";
                console.log(errors);
            }
            break;
        case 'question':
            if (document.getElementById(id).value == "") {
                errors.push("Question is empty");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "Question is empty") {
                        document.getElementById('questionError').innerText = errors[i].toString();
                    }
                }
            } else {
                removeError('Question is empty');
                document.getElementById('questionError').innerText = "";
                console.log(errors);
            }
            if (errors.length == 0) {
                document.getElementById('submit').disabled = false;
            }
            break;
    }

}