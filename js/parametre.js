let ajouter = document.getElementById("card1")
console.log(ajouter)
ajouter.addEventListener("click", () =>{
    window.location.href = "Administrator.php?type=Ajouter"
})

let modifier = document.getElementById("card2")
modifier.addEventListener("click", () =>{
    window.location.href = "listead.php?type=modifier"
})

let supprimer = document.getElementById("card3")
supprimer.addEventListener("click", () =>{
    window.location.href = "listead.php?type=supprimer"
})