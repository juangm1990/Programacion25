// Cuando se intenta enviar el formulario, valida los campos
document.getElementById("formulario").addEventListener("submit", function(evento) {
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;

  if (email == "" || password == "") {
    alert("Debes rellenar todos los campos");
    evento.preventDefault(); // evita que se envíe el formulario
  } else {
    alert("Formulario enviado correctamente");
  }
});
