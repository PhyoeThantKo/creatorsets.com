var myNav = document.getElementById('mynav');
window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200 ) {
        myNav.classList.add("bg-white");
        myNav.classList.remove("bg-transparent");
    } 
    else {
        myNav.classList.add("bg-transparent");
        myNav.classList.remove("bg-white");
    }
};