

let btnAppart = document.getElementsByClassName("choice")
let chevron = document.querySelectorAll(".small-circle")
for (let i = 0; i < btnAppart.length; i++) {
    btnAppart[i].addEventListener("click", (e) => {
        e.preventDefault
        showList(e.target.parentElement)
    })
    chevron[i].addEventListener("click", (e) => {
        e.preventDefault
        showList(e.target.parentElement.parentElement)
    })
}
function showList(e) {
    var Appart_select = e
    let ul = Appart_select.querySelector("ul")
    ul.style.display = 'flex'
    let chevrons = e.querySelector("i");
    chevrons.classList.remove('fa-chevron-down')
    chevrons.classList.add('fa-chevron-up')
}
let btnAppartLi = document.querySelectorAll(".Appart-select ul li")
for (let j = 0; j < btnAppartLi.length; j++) {
    btnAppartLi[j].addEventListener("click", (e) => {
        e.preventDefault
        var ul = e.target.parentElement
        var replaceword = ul.parentElement.querySelector(".choice")
        replaceword.innerText = e.target.innerText
        hideList(ul)
    })
}
function hideList(ul) {
    ul.style.display = 'none'
    let chevrons = ul.parentElement.querySelector("i");
    chevrons.classList.remove('fa-chevron-up')
    chevrons.classList.add('fa-chevron-down')
}

// Ajoute un écouteur d'événements pour les clics sur la page
document.addEventListener('click', (event) => {
    event.preventDefault
    const ul = document.querySelectorAll("ul");
    let btnAppart = document.getElementsByClassName("Appart-select")
    let chevron = document.querySelectorAll(".small-circle i")
    // const btnul = document.querySelectorAll(".carousel-item ul");
    // Vérifie si l'élément cliqué n'est pas dans ul et que ul est affiché en bloc et que l'élément cliqué n'est pas menue
    for (let index = 0; index < ul.length; index++) {
        if (!ul[index].contains(event.target) && ul[index].style.display == "flex" && !btnAppart[index].contains(event.target)) {
            // Si ces conditions sont remplies, masque ul et change la couleur de menue en noir
            // document.getElementsByClassName("show")[0].classList.remove("show")
            ul[index].style.display = 'none'
            if (chevron[index].classList.contains("fa-chevron-up")) {
                chevron[index].classList.remove("fa-chevron-up")
                chevron[index].classList.add("fa-chevron-down")
            }
        }
    }

});

let btnAbondon = document.querySelector("button[type ='button']")
btnAbondon.addEventListener("click", () => {
    window.history.back()
})





