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
        console.log(age);
        console.log(today.getMonth());

        let gender = idNumber.substring(6, 10);
        if (gender >= 0000 && gender <= 4999) {
            document.getElementById('gender').value = 'female';
        } else if (gender >= 5000 && gender <= 9999) {
            document.getElementById('gender').value = 'male';
        }


        document.getElementById('age').value = age;
    }
}

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
        case 'lastName':
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
        case 'pass':
            if (document.getElementById(id).value == "") {
                errors.push("Password is empty");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "Password is empty") {
                        document.getElementById('passError').innerText = errors[i].toString();
                    }
                }
            } else if (document.getElementById(id).value.length < 8) {
                errors.push("Password is too short");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "Password is too short") {
                        document.getElementById('passError').innerText = errors[i].toString();
                    }
                }
            } else {
                removeError('Password is empty');
                removeError('Password is too short');
                document.getElementById('passError').innerText = "";
                console.log(errors);
            }
            break;
        case 'cell':
            if (document.getElementById(id).value == "") {
                errors.push("Cellphone number is empty");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "Cellphone number is empty") {
                        document.getElementById('cellError').innerText = errors[i].toString();
                    }
                }
            } else if (document.getElementById(id).value.length < 10) {
                errors.push("Cellphone number is too short");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "Cellphone number is too short") {
                        document.getElementById('cellError').innerText = errors[i].toString();
                    }
                }
            } else {
                removeError('Cellphone number is empty');
                removeError('Cellphone number is too short');
                document.getElementById('cellError').innerText = "";
                console.log(errors);
            }
            break;
        case 'passConf':
            if (document.getElementById(id).value == "") {
                errors.push("Password confirmation is empty");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "Password confirmation is empty") {
                        document.getElementById('passConfError').innerText = errors[i].toString();
                    }
                }
            } else if (document.getElementById('passConf').value != document.getElementById('pass').value) {
                errors.push("Passwords do not match");
                for (let i = 0; i < errors.length; i++) {
                    if (errors[i] === "Passwords do not match") {
                        document.getElementById('passConfError').innerText = errors[i].toString();
                    }
                }
            } else {
                removeError('Password is empty');
                removeError('Passwords do not match');
                document.getElementById('passConfError').innerText = "";
                console.log(errors);
            }
            if (document.getElementById('passConf').value === document.getElementById('pass').value) {
                document.getElementById('createUser').disabled = false;
            }
            break;

    }
}