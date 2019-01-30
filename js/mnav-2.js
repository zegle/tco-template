window.onscroll = function () { scrollbar() };//event

function scrollbar() {//function for event
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("nav").className = "fade header-nav-fixed";
    } else {
        document.getElementById("nav").className = "header-nav";
    }
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("mnav").className = "fade header-nav-fixed z-1010";
    } else {
        document.getElementById("mnav").className = "header-mnav";
    }
};