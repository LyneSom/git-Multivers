let Ajouter =  document.querySelectorAll(".imageAjouter")
console.log(Ajouter)
addEventListener("click", () => {
    
})

let Supprimer =  document.querySelectorAll(".imageSupprimer")
console.log(Supprimer)
addEventListener("click", () => {
    
})

let btnAppart = document.getElementsByClassName("Appart-select")

for (let i = 0 ; i < btnAppart.length ; i++){
    btnAppart[i].addEventListener("click", (e) =>{
        e.preventDefault
        var Appart_select = e.target
        let ul = Appart_select.querySelector("ul")
        ul.style.display = 'flex'
    })
}
let btnAppartLi = document.querySelectorAll(".Appart-select ul li")
for (let j = 0; j < btnAppartLi.length; j++){
    btnAppartLi[j].addEventListener("click", (e) =>{
        e.preventDefault
        var ul = e.target.parentElement
        var replaceword = ul.parentElement.querySelector(".choice")
        replaceword.innerText = e.target.innerText
        ul.style.display = 'none'
 })
}


let Modifier =  document.querySelectorAll(".btnEdit")
addEventListener("click", () => {
    
})


