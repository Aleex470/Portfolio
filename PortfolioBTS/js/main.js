/* Menu Show Y Hidden */
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

/* Menu Show */
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu')

    })
}

/* Menu Hidden */

if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')
    })
}


/* Remove Menu Mobile */
const navLink = document.querySelectorAll('nav__link')

function linkAction() {
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))




// Mode Nuit/Jour
const iconChange = document.getElementById("theme-button")

function darkTheme() {
    var element = document.body;
    element.classList.toggle("dark-theme");
    //modification icon
    iconTheme = (icon) => icon.classList.toggle("uil-sun")
}



