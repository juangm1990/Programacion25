// Cuando el usuario escribe, se muestra el texto por consola
document.getElementById("pruebatexto").addEventListener("input", function() {
  console.log("Texto actual: " + this.value);
});
