function questions() {
    document.getElementById('footer').style.visibility = "hidden";
    document.getElementById("homePage").style.visibility = "hidden";
    document.getElementById('socials').style.visibility = "hidden";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("otherPage").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", "ifaa.php", true);
    xmlhttp.send();
}



function report() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("otherPage").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", 'report.php', true);
    xmlhttp.send();
}

function logout() {
    document.getElementById("homePage").style.visibility = "hidden";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("otherPage").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", 'UserControl/logout.php', true);
    xmlhttp.send();
}