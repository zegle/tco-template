var mnav = document.getElementById("m-nav");
var toggle = document.getElementById("toggle");

toggle.onclick = function() {
    if (toggle.checked) {
        mnav.style.height = "100vh";
    } else {
        mnav.style.height = "5rem";
    }
};

window.onscroll = function () { scrollbar() };//event

function scrollbar() {//function for event
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("nav").className = "fade header-nav-fixed";
    } else {
        document.getElementById("nav").className = "header-nav";
    }
};

