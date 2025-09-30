const c1 = document.querySelector("#c1")
const baseUrl = "http://localhost:8080/"

c1.addEventListener("click", () => {
    
    if (c1.src == baseUrl + "carta1.png"){
        c1.src = baseUrl + "carta2.png"

    } else {
        c1.src= "carta1.png"
    }

    // Poner un mensaje en un punto específico
    // alert("hola")

    // cambiar carta
    //c1.src=("carta2.png")
})

const c2 = document.querySelector("#c2")

c2.addEventListener("click", () => {
    
    c2.classList.add("hidden")
    const c2_1 = document.querySelector("#c2_1")
    c2_1.classList.remove("hidden")
    
})

const boton_crear = document.querySelector("#btn_crear")

boton_crear.addEventListener("click", () =>{

    let nuevaCarta = document.createElement("img")
    nuevaCarta.src = baseUrl + "carta2.png"
    nuevaCarta.id = "nueva_carta"

    const cartas = document.querySelector("#cartas")
    cartas.appendChild(nuevaCarta)


})