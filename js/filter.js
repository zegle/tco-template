var filter_focus = document.getElementById("filter-focus");
var filter_fiesta = document.getElementById("filter-fiesta");
var filter_wrx = document.getElementById("filter-wrx");
var filter_frs = document.getElementById("filter-86");
var filter_all = document.getElementById("filter-all");
var title = document.getElementById("title");

filter_focus.onclick = function () {
    title.innerHTML="Focus ST Products";
    var hide = document.getElementsByClassName("hide");
    for (var i = 0, len = hide.length; i < len; i++) {
        hide[i].style.display = "none";
    }
    var focus = document.getElementsByClassName("focus");
    for (var i = 0, len = focus.length; i < len; i++) {
        focus[i].style.display="block";
    }
};

filter_fiesta.onclick = function () {
    title.innerHTML = "Fiesta ST Products";
    var hide = document.getElementsByClassName("hide");
    for (var i = 0, len = hide.length; i < len; i++) {
        hide[i].style.display = "none";
    }
    var fiesta = document.getElementsByClassName("fiesta");
    for (var i = 0, len = fiesta.length; i < len; i++) {
        fiesta[i].style.display = "block";
    }
};

filter_wrx.onclick = function () {
    title.innerHTML = "Subaru WRX/STI Products";
    var hide = document.getElementsByClassName("hide");
    for (var i = 0, len = hide.length; i < len; i++) {
        hide[i].style.display = "none";
    }
    var wrx = document.getElementsByClassName("wrx");
    for (var i = 0, len = wrx.length; i < len; i++) {
        wrx[i].style.display = "block";
    }
};

filter_frs.onclick = function () {
    title.innerHTML = "BRZ/FRS Products";
    var hide = document.getElementsByClassName("hide");
    for (var i = 0, len = hide.length; i < len; i++) {
        hide[i].style.display = "none";
    }
    var frs = document.getElementsByClassName("86");
    for (var i = 0, len = frs.length; i < len; i++) {
        frs[i].style.display = "block";
    }
};

filter_all.onclick = function () {
    title.innerHTML = "All Products";
    var hide = document.getElementsByClassName("hide");
    for (var i = 0, len = hide.length; i < len; i++) {
        hide[i].style.display = "block";
    }
};