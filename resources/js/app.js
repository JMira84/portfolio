/* HAMBURGER MENU */

const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector(".nav-menu");
const hamburgerTop = document.querySelector(".top");
const hamburgerMiddle = document.querySelector(".middle");
const hamburgerBottom = document.querySelector(".bottom");
function hamburgerMenu() {

    hamburgerTop.classList.add("top-transform");
    hamburgerMiddle.classList.add("middle-transform");
    hamburgerBottom.classList.add("bottom-transform");

    nav.classList.toggle("show-menu");

    if(nav.classList.contains("show-menu")) {
        nav.classList.add("nav-shadow");
    } else {
        nav.classList.remove("nav-shadow");
    }

    if (!nav.classList.contains("show-menu")) {
        hamburgerTop.classList.remove("top-transform");
        hamburgerMiddle.classList.remove("middle-transform");
        hamburgerBottom.classList.remove("bottom-transform");
    }
}

hamburger.addEventListener("click", hamburgerMenu);


/* HEADER COLOR CHANGE */
const backToTopBtn = document.querySelector(".to-top-btn");

function interActions() {
    const header = document.querySelector("header");
    const navLinks = document.querySelectorAll(".nav-links");
    const logo = document.querySelector(".logo-img");
    const navList = document.querySelector(".nav-menu");

    for(let links of navLinks) {
        if(document.body.scrollTop >= 92 || document.documentElement.scrollTop >= 92) {
            header.classList.add("header-change");
            links.classList.add("dark-text");
            hamburgerTop.classList.add("dark-burger");
            hamburgerMiddle.classList.add("dark-burger");
            hamburgerBottom.classList.add("dark-burger");
            logo.src = "assets/images/logo.png"

            if(window.innerWidth <= 812) {
                nav.classList.add("bg-white");
            }

        } else {
            header.classList.remove("header-change");
            links.classList.remove("dark-text");
            hamburgerTop.classList.remove("dark-burger");
            hamburgerMiddle.classList.remove("dark-burger");
            hamburgerBottom.classList.remove("dark-burger");
            logo.src = "assets/images/logo2.png"
            nav.classList.remove("bg-white");

            if (window.innerWidth <= 768) {
                nav.classList.remove("bg-white");
            }
        }
    }

    if (document.body.scrollTop >= 650 || document.documentElement.scrollTop >= 650) {
        backToTopBtn.classList.add("d-block");
    } else {
        backToTopBtn.classList.remove("d-block");
    }
}

window.addEventListener("scroll", interActions);


/* SMOOTH SCROLL TOP */
function smoothScroll(e) {
    window.scroll({
        top: 0,
        left: 0,
        behavior: "smooth"
    });

    e.preventDefault();
}

backToTopBtn.addEventListener("click", smoothScroll);


/* SCROLL INTO ABOUT DIV */
const toAbout = document.querySelectorAll(".to-about");
const about = document.getElementById("about");
function scrollToAbout(e) {
    about.scrollIntoView({
        block: "start",
        behavior: "smooth"
    });

    e.preventDefault();
}

for (let btn of toAbout) {
    btn.addEventListener("click", scrollToAbout);
}


/* SCROLL FROM LINKS */
const navLinks = document.querySelectorAll(".nav-links");
function scrollToDiv(e) {
    if (e.target.dataset.to === "home") {

        smoothScroll(e);

    } else if (e.target.dataset.to === "portfolio") {
        const portfolio = document.getElementById("portfolio");

        portfolio.scrollIntoView({
            block: "start",
            behavior: "smooth"
        });
    } else if (e.target.dataset.to === "contact") {
        const contact = document.getElementById("contact");

        contact.scrollIntoView({
            block: "start",
            behavior: "smooth"
        });
    }

    e.preventDefault();
}

for(let link of navLinks) {
    link.addEventListener("click", scrollToDiv);
}


/* TYPEWRITER EFFECT */
let dataText = [ "o João Mira.", "Web Developer.", "quem procuram." ];

function typeWriter(text, i, fnCallback) {
    // verifica se o texto ainda não está terminado
    if(i < (text.length)) {
        // acrescenta o próximo caracter ao h2
        document.querySelector(".typewriter-title").innerHTML = text.substring(0, i + 1) + '<span aria-hidden="true"></span>';

        // espera um pouco e invoca esta função de novo para o próximo caracter
        setTimeout(() => {
            typeWriter(text, i + 1, fnCallback);
        }, 100);

        // o texto terminou; invoca callback se houver uma função de callback
    } else if(typeof fnCallback == "function") {
        setTimeout(fnCallback, 700);
    }
}

// começa a animação para o texto
function startTextAnimation(i) {
    if(typeof dataText[i] == "undefined") {
        setTimeout(() => {
            startTextAnimation(0);
        }, 20000);
    }

    // verifica se o dataText[i] existe
    if(dataText[i] && (i < dataText[i].length)) {
        // se existir começa a animação
        typeWriter(dataText[i], 0, function() {
            // depois do callback (e de todo o texto ter sido animado), começa outro texto
            startTextAnimation(i + 1);
        });
    }
}

startTextAnimation(0);


/* OPEN MODAL */
const projects = document.querySelectorAll(".project");
const modal = document.querySelector(".portfolio-modal");
const html = document.querySelector("html");
function openModal() {
    const projectName = document.querySelector(".project-name");
    const projectLanguages = document.querySelector(".project-languages");
    const projectClient = document.querySelector(".project-client");
    const projectLink = document.querySelector(".project-link");
    const projectImg = document.querySelector(".project-img");
    const projectImgLink = document.querySelector(".project-img-link");

    modal.classList.add("show-modal");

    for(let project of projects) {
        if(project.classList.contains("fdm")) {
            projectName.textContent = "Fórum da Malta";
            projectLanguages.textContent = "JS, PHP, SQL";
            projectClient.textContent = "-";
            projectLink.textContent = "www.maltaforum.pt";
            projectLink.href = "http://maltaforum.pt/";
            projectImg.src = "assets/images/portfolio/logoFdM.png";
            projectImg.alt = "Forum da Malta preview image";
            projectImgLink.href = "http://maltaforum.pt/";
        }
    }

    html.classList.add("disable-overflow");
}

for(let project of projects) {
    project.addEventListener("click", openModal);
}


/* CLOSE MODAL */
const close = document.querySelector(".close-modal");
function closeModal() {
    modal.classList.remove("show-modal");

    html.classList.remove("disable-overflow");
}

close.addEventListener("click", closeModal);


/* SEND EMAIL */
const sendEmail = document.querySelector(".email-btn");
const sibling = document.querySelector(".contact-title");
const messageWrapper = document.querySelector(".message-wrapper");

function createEmail(content) {
    const sendMessage = "/home/message"; 
    const form = document.querySelector("form");
    
    fetch(sendMessage, {
        "method": "POST",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        "credentials": "same-origin",
        "body": JSON.stringify(content)
    })
    .then(response => response.text())
    .then(result => {
        
        if (result) {
            form.reset();

            messageWrapper.classList.remove("d-none");
            messageWrapper.classList.add("alert", "alert-success", "d-block");
            messageWrapper.textContent = "Mensagem enviada com successo!";;
            
            setTimeout(() => {
                messageWrapper.classList.remove("alert", "alert-success", "d-block");
                messageWrapper.classList.add("d-none");
            }, 3000);
        }
    })
    .catch(err => console.log(err));
}

function submitMsg() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const subject = document.getElementById("subject").value;
    const message = document.querySelector("textarea").value;

    if(name && email && subject && message) {
        createEmail({
            name: name,
            email: email,
            subject: subject,
            message: message
        });
    }

    if(!name || !email || !subject || !message) {
        messageWrapper.classList.remove("d-none");
        messageWrapper.classList.add("alert", "alert-danger", "d-block");
        messageWrapper.textContent = "Por favor, preencha todos os campos.";

        setTimeout(() => {
            messageWrapper.classList.remove("alert", "alert-danger", "d-block");
            messageWrapper.classList.add("d-none");
        }, 3000);
    }
}

sendEmail.addEventListener("click", submitMsg);