// back to top button

var myButton = document.getElementById("btt");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scroll > 20 || document.documentElement.scrollTop > 20) {
        myButton.style.display = "block";
    }
    else {
        myButton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
//end back to top button

