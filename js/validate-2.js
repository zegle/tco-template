var submit = document.getElementById("submitbtn");
function namevalidation() {
    var fullname = document.getElementById("fname").value;
    var Onlyletters = /^[a-zA-Z]+(?:[\s.]+[a-zA-Z]+)*$/;
    if (fullname != "" && fullname.length <= 100) {
        if (fullname.match(Onlyletters)) {
            document.getElementById("label1").innerHTML = "&#10004;";
            document.getElementById("label1").style.color = "#06c316";
            return true;
        }
        else {
            document.getElementById("label1").innerHTML = "Invalid Characters";
            document.getElementById("label1").style.color = "#06c316";
            return false;
        }
    }
};

function phonevalidation() {
    var phone = document.getElementById("number").value;
    var Onlynumbers = /^\d+$/;
    if (phone != "") {
        if (phone.match(Onlynumbers) && phone.length == 9) {
            document.getElementById("label2").innerHTML = ("&#10004;");
            document.getElementById("label2").style.color = "#06c316";
            return true;
        }
        else {
            document.getElementById("label2").innerHTML = ("Invalid Characters");
            document.getElementById("label2").style.color = "#06c316";
            return false;
        }
    }
};

function emailvalidation() {
    var mail = document.getElementById("email").value;
    var emailtest = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (mail != "" && mail.length <= 100) {
        if (mail.match(emailtest)) {
            document.getElementById("label3").innerHTML = ("&#10004;");
            document.getElementById("label3").style.color = "#06c316";
            return true;
        }
        else {
            document.getElementById("label3").innerHTML = ("Invalid Email Address");
            return false;
        }
    }
};

//check if form is filled out
submit.onclick = function () {
    var fullname = document.getElementById("fname").value;
    var phone = document.getElementById("number").value;
    var mail = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    if (fullname, phone, mail, message != "") {
        return true;
    }
    else {
        alert("Please fill any empty fields above before submitting");
        return false;
    }
};