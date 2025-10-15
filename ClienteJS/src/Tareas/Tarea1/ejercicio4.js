// Detecta qué tecla se pulsa dentro del input
document.getElementById("texto").addEventListener("keydown", function(e) {
  console.log("Has pulsado la tecla: " + e.key);
});
