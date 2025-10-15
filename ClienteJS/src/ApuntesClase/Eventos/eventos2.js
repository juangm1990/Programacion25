// Eventos del ratón
// Selector

const nav = document.querySelector('nav');
const boton = document.querySelector('#prueba');

// Evento click
boton.addEventListener('click', ()=>{
    console.log('Has hecho clic en el botón');
});

// Evento mouseenter
boton.addEventListener('mouseenter', ()=>{
    console.log('Has puesto el ratón encima del botón');
    boton.style.backgroundColor = 'red';
});

// Evento mouseout
boton.addEventListener('mouseout', ()=>{
    console.log('Has sacado el ratón del botón');
    boton.style.backgroundColor = 'lightgrey';
});

// Evento mousedown
boton.addEventListener('mousedown', ()=>{
    console.log('Has hecho un mousedown el ratón del botón');
});

// Evento mouseup
boton.addEventListener('mouseup', ()=>{
    console.log("Has hecho un mouseup en el botón")
})

