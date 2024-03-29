let input = document.querySelectorAll("input")
let labels = document.querySelectorAll("label")
for (let i = 0; i < input.length; i++) {
    input[i].addEventListener("focus", (e) => {
        e.preventDefault
        let label = e.target.parentElement.querySelector("label");
        label.classList.add("moveUp")
    })
}

// document.addEventListener("click", (e) => {
//     for (let i = 0; i < label.length; i++) {
//         if (input[i].value == "" && !input.focus()) {
//             labels.classList.remove("moveUp")
//         }
//     }
// })
const box = document.querySelectorAll(".check");

for (let index = 0; index < box.length; index++) {
    const element = box[index];
    element.addEventListener("click",(e) =>{
        e.preventDefault
        let check = e.target;
        if(check.style.backgroundColor == "black"){
            check.style.backgroundColor = "white";
        }else{
            check.style.backgroundColor = "black";
        }
    })
}