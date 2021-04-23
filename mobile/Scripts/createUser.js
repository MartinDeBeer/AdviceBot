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