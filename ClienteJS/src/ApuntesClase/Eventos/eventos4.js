// Eventos del formulario

const formulario = document.querySelector('formulario5');

// Capturar el evento submit - parametrosEvento

formulario.addEventListener('submit', (e)=>{
    e.preventDefault(); // Parar el submit

    console.log('Introducir en el DOM');

    window.location.href = '/Login'

})
