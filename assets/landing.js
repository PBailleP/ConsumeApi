function focusCard(card) {
    card.style.position = "absolute";
    card.style.zIndex = "100";
    card.style.width = "25vw";
    card.style.height = "75vh";
    card.style.marginLeft = "auto";
    card.style.marginRight = "auto";
    card.style.backdropFilter = "blur(20px)";
    card.style.top = "12.5vh";
    card.style.transition = "0.3s";
}

const contactMe = document.getElementById("contact-me");
const knowMe = document.getElementById("know-me");
const mySkills = document.getElementById("my-skills");

contactMe.addEventListener("click", () => {
    contactMe.style.position = "absolute";
    contactMe.style.zIndex = "100";
    contactMe.style.width = "25vw";
    contactMe.style.height = "75vh";
    contactMe.style.marginLeft = "auto";
    contactMe.style.marginRight = "auto";
    contactMe.style.backdropFilter = "blur(20px)";
    contactMe.style.top = "12.5vh";
    contactMe.style.display = "flex";
    contactMe.style.transition = "0.3s";
    contactMe.innerHTML = '';
    let titleContact = document.getElementById(contactMe.appendChild(h4).id = "titleContact");
    let pContact = document.getElementsByClassName(contactMe.appendChild(p).className = "p-contacts");
    contactMe.appendChild(newP()).innerHTML = "allo";
    titleContact.innerHTML = "Get in touch :";
    contactMe.style.display = "flex";
    contactMe.style.flexDirection = "column";
    contactMe.style.textAlign = "center";
    titleContact.style.marginLeft = "2vw";
    pContact.style.marginLeft = "2vw";
})