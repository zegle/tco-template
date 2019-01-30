
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
function modelvalidation() {
    var carmodel = document.getElementById("model").value;
    var Onlyletters = /^[a-zA-Z]+(?:[\s.]+[a-zA-Z]+)*$/;
    if (carmodel != "" && carmodel.length <= 100) {
        if (carmodel.match(Onlyletters)) {
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
function yearvalidation() {
    var vyear = document.getElementById("year").value;
    var Onlynumbers = /^\d+$/;
    if (vyear != "" && vyear.length <= 100) {
        if (vyear.match(Onlynumbers)) {
            document.getElementById("label3").innerHTML = ("&#10004;");
            document.getElementById("label3").style.color = "#06c316";
            return true;
        }
        else {
            document.getElementById("label3").innerHTML = ("Invalid Characters");
            document.getElementById("label3").style.color = "#06c316";
            return false;
        }
    }
};
function emailvalidation() {
    var mail = document.getElementById("email").value;
    var emailtest = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (mail != "" && mail.length <= 100) {
        if (mail.match(emailtest)) {
            document.getElementById("label4").innerHTML = ("&#10004;");
            document.getElementById("label4").style.color = "#06c316";
            return true;
        }
        else {
            document.getElementById("label4").innerHTML = ("Invalid Email Address");
            return false;
        }
    }
};

//check if form is filled out
submit.onclick = function () {
    var fullname = document.getElementById("fname").value;
    var carmodel = document.getElementById("model").value;
    var vyear = document.getElementById("year").value;
    var message = document.getElementById("message").value;
    var mail = document.getElementById("email").value;
    if (fullname, carmodel, vyear, message, mail != "") {
        return true;
    }
    else {
        alert("Please fill any empty fields above before submitting");
        return false;
    }
};