// Eventos del techado

// Twitter mientras vas escribiendo  te aparece unn contador de caracteres
// Validacion de campos mientras está escribiendo

// Selector

const imputEmail = document.querySelector('#email');
const imputTexto = document.querySelector("#pruebatexto");

imputTexto.addEventListener('keydown', ()=>{
    console.log("Has presionado una tecla")
})

imputTexto.addEventListener('keyup', ()=>{
    console.log("Has soltado una tecla");
})

imputEmail.addEventListener('blur', ()=>{
    console.log("Has salido del input. Para realizar validaciones");
})

imputEmail.addEventListener('copy', ()=>{
    console.log("Has copiado un contenido del input");
})

inputEmail.addEventListener('cut', ()=> {
    console.log("Has pegado un contenido en el input")
})

inputEmail.addEventListener('paste', ()=> {
    console.log("Has pegado un contenido en el input")
})

// Evento que está sucediendo
// En que lugar, en que formulario, target: información sobre el evento anterior


// PRUEBA PRACTICA
// tenemos un input ¿cuantas web hemos trasteado? MEDAC te sale modulo de programacion, modulo de ciber y desarrollo web. Esto es un campo que es un filtro (modulos) Escritas una p y desaparece los modulos a modo de busqueda. primero identificar la letra y me la guarda en una variable y con esa p tiene que hacer una peticion al servidor de todos que empiezan por p (en un array) tenemos que recorrerlo y luego mostrarlo. Pero es que tenemos muchos registros que empiezan por p lo que hace es poner 3 caracteres ¿como se pueden identificar de a partir de los tres caracteres. primero cuando pulse una tecla llamar keydawn o keyup capturar contenido de input si el .lent es >= 3 entonces no hacer nada sino hacerlo. Cada vez que tu pulses una letra vayan filtrando letras. Cuando tu pulses retroceso (una tecla pues ya está)

