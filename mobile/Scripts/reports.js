function tellMore(id) {
    let subject = document.getElementById(id).value;
    let address = 'adriaan@advicebot.co.za';
    let body = 'Name: ' + '%0a' + 'Surname: ' + '%0a' + 'ID Number: ' + '%0a' + 'Cellphone Number: ' + '%0a' + 'Ask a question: ';
    window.location.href = "mailto:" + address + "?subject=" + subject + "&body=" + body;
}