document.write('\
\
<div class="navbar-grid">\
<div class="pre-navbar"></div>\
<button class="openbtn"><img id="hamburger" src="../img/hamburger.png" alt="hamburger"></button>\
<div id="navigation-bar" class="navigation-bar">\
    <a href="#" id="closebtn" class="closebtn">X</a>\
    <a href="index.html" class="navbar-link" id="home">home</a>\
    <a href="../templates/intro.html" class="navbar-link">introduction</a>\
    <div class="dropdown">\
        <a class="navbar-button" href="#">services</a>\
        <div class="drpcontent">\
            <a class="dropdown-item" href="../templates/finances.html">finances</a>\
            <a class="dropdown-item" href="../templates/human-ressources.html">human resources</a>\
            <a class="dropdown-item" href="../templates/sales.html">sales & marketing</a>\
            <a class="dropdown-item" href="../templates/design.html">concept & design</a>\
            <a class="dropdown-item" href="../templates/tech.html">technology</a>\
        </div>\
    </div>\
    <a href="contact.html" class="navbar-link" id="contact-link">contact</a>\
</div>\
</div>\
');

let openBtn = document.querySelector(".openbtn");
openBtn.addEventListener("click", () => {
    showNav();
});

let closeBtn = document.querySelector(".closebtn");
closeBtn.addEventListener("click", () => {
    hideNav();
});

function showNav() {
    document.querySelector(".navigation-bar").style.width = "100vw";
    document.querySelector(".openbtn").style.display = "none";
}

function hideNav() {
    document.querySelector(".navigation-bar").style.width = "0vw";
    document.querySelector(".openbtn").style.display = "block";
}