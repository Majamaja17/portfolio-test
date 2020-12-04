// nav
document.getElementById('myTopnav').addEventListener('click', respNav);

function respNav() {

    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

// scroll btn
document.getElementById('scrollBtn').addEventListener('click', topFunction);

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollBtn").style.display = "block";
    } else {
        document.getElementById("scrollBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0;
}

// ScrollReveal
window.sr = ScrollReveal({ reset: true });

sr.reveal('.about__text, .technologies__box, .contact__box, .works__box, .courses__box--number, .jumbotron__title, .btn--courses', {
    origin: 'left', 
    distance: '300px', 
    duration: 2000
});

