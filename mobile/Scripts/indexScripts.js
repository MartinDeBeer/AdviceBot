function loaded() {
    alert("Welcome to AdviceBot. This is a beta version of the web application.");
}

function questions() {
    document.getElementById("loggedOut").innerHTML = "";
    document.getElementById('footer').style.visibility = "hidden";
    document.getElementById("homePage").style.visibility = "hidden";
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
    document.getElementById("loggedOut").innerHTML = "You have been successfully logged out.";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("otherPage").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", 'UserControl/logout.php', true);
    xmlhttp.send();
}

function forgotPass() {
    document.getElementById("login").style.visibility = "hidden";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("otherPage").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", "UserControl/enterEmail.php", true);
    xmlhttp.send();
}